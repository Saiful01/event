<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStallRequest;
use App\Http\Requests\StoreStallRequest;
use App\Http\Requests\UpdateStallRequest;
use App\Models\Stall;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StallController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('stall_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stalls = Stall::with(['media'])->get();

        return view('admin.stalls.index', compact('stalls'));
    }

    public function create()
    {
        abort_if(Gate::denies('stall_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stalls.create');
    }

    public function store(StoreStallRequest $request)
    {
        $stall = Stall::create($request->all());

        if ($request->input('image', false)) {
            $stall->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $stall->id]);
        }

        return redirect()->route('admin.stalls.index');
    }

    public function edit(Stall $stall)
    {
        abort_if(Gate::denies('stall_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stalls.edit', compact('stall'));
    }

    public function update(UpdateStallRequest $request, Stall $stall)
    {
        $stall->update($request->all());

        if ($request->input('image', false)) {
            if (! $stall->image || $request->input('image') !== $stall->image->file_name) {
                if ($stall->image) {
                    $stall->image->delete();
                }
                $stall->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($stall->image) {
            $stall->image->delete();
        }

        return redirect()->route('admin.stalls.index');
    }

    public function show(Stall $stall)
    {
        abort_if(Gate::denies('stall_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stalls.show', compact('stall'));
    }

    public function destroy(Stall $stall)
    {
        abort_if(Gate::denies('stall_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stall->delete();

        return back();
    }

    public function massDestroy(MassDestroyStallRequest $request)
    {
        $stalls = Stall::find(request('ids'));

        foreach ($stalls as $stall) {
            $stall->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('stall_create') && Gate::denies('stall_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Stall();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
