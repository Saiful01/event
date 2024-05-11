<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVenuRequest;
use App\Http\Requests\StoreVenuRequest;
use App\Http\Requests\UpdateVenuRequest;
use App\Models\Venu;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class VenuController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('venu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $venus = Venu::all();

        return view('admin.venus.index', compact('venus'));
    }

    public function create()
    {
        abort_if(Gate::denies('venu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.venus.create');
    }

    public function store(StoreVenuRequest $request)
    {
        $venu = Venu::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $venu->id]);
        }

        return redirect()->route('admin.venus.index');
    }

    public function edit(Venu $venu)
    {
        abort_if(Gate::denies('venu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.venus.edit', compact('venu'));
    }

    public function update(UpdateVenuRequest $request, Venu $venu)
    {
        $venu->update($request->all());

        return redirect()->route('admin.venus.index');
    }

    public function show(Venu $venu)
    {
        abort_if(Gate::denies('venu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.venus.show', compact('venu'));
    }

    public function destroy(Venu $venu)
    {
        abort_if(Gate::denies('venu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $venu->delete();

        return back();
    }

    public function massDestroy(MassDestroyVenuRequest $request)
    {
        $venus = Venu::find(request('ids'));

        foreach ($venus as $venu) {
            $venu->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('venu_create') && Gate::denies('venu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Venu();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
