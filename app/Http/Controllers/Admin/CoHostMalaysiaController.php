<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCoHostMalaysiumRequest;
use App\Http\Requests\StoreCoHostMalaysiumRequest;
use App\Http\Requests\UpdateCoHostMalaysiumRequest;
use App\Models\CoHostMalaysium;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CoHostMalaysiaController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('co_host_malaysium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coHostMalaysia = CoHostMalaysium::with(['media'])->get();

        return view('admin.coHostMalaysia.index', compact('coHostMalaysia'));
    }

    public function create()
    {
        abort_if(Gate::denies('co_host_malaysium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coHostMalaysia.create');
    }

    public function store(StoreCoHostMalaysiumRequest $request)
    {
        $coHostMalaysium = CoHostMalaysium::create($request->all());

        if ($request->input('image', false)) {
            $coHostMalaysium->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $coHostMalaysium->id]);
        }

        return redirect()->route('admin.co-host-malaysia.index');
    }

    public function edit(CoHostMalaysium $coHostMalaysium)
    {
        abort_if(Gate::denies('co_host_malaysium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coHostMalaysia.edit', compact('coHostMalaysium'));
    }

    public function update(UpdateCoHostMalaysiumRequest $request, CoHostMalaysium $coHostMalaysium)
    {
        $coHostMalaysium->update($request->all());

        if ($request->input('image', false)) {
            if (! $coHostMalaysium->image || $request->input('image') !== $coHostMalaysium->image->file_name) {
                if ($coHostMalaysium->image) {
                    $coHostMalaysium->image->delete();
                }
                $coHostMalaysium->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($coHostMalaysium->image) {
            $coHostMalaysium->image->delete();
        }

        return redirect()->route('admin.co-host-malaysia.index');
    }

    public function show(CoHostMalaysium $coHostMalaysium)
    {
        abort_if(Gate::denies('co_host_malaysium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coHostMalaysia.show', compact('coHostMalaysium'));
    }

    public function destroy(CoHostMalaysium $coHostMalaysium)
    {
        abort_if(Gate::denies('co_host_malaysium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coHostMalaysium->delete();

        return back();
    }

    public function massDestroy(MassDestroyCoHostMalaysiumRequest $request)
    {
        $coHostMalaysia = CoHostMalaysium::find(request('ids'));

        foreach ($coHostMalaysia as $coHostMalaysium) {
            $coHostMalaysium->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('co_host_malaysium_create') && Gate::denies('co_host_malaysium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CoHostMalaysium();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
