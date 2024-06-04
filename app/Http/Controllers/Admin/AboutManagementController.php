<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutManagementRequest;
use App\Http\Requests\StoreAboutManagementRequest;
use App\Http\Requests\UpdateAboutManagementRequest;
use App\Models\AboutManagement;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutManagementController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutManagements = AboutManagement::with(['media'])->get();

        return view('admin.aboutManagements.index', compact('aboutManagements'));
    }

    public function create()
    {
        abort_if(Gate::denies('about_management_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutManagements.create');
    }

    public function store(StoreAboutManagementRequest $request)
    {

        $url1 = $request->input('link_1');
        $url2 = $request->input('link_2');
        $request['link_1'] = $this->getYouTubeVideoKey($url1);
        $request['link_2'] = $this->getYouTubeVideoKey($url2);

        //return $request->all();

        $aboutManagement = AboutManagement::create($request->all());

        if ($request->input('image', false)) {
            $aboutManagement->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        foreach ($request->input('video', []) as $file) {
            $aboutManagement->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('video');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutManagement->id]);
        }

        return redirect()->route('admin.about-managements.index');
    }

    private function getYouTubeVideoKey($url)
    {
        $pattern = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
        preg_match($pattern, $url, $matches);

        return $matches[1] ?? null;
    }

    public function edit(AboutManagement $aboutManagement)
    {
        abort_if(Gate::denies('about_management_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutManagements.edit', compact('aboutManagement'));
    }

    public function update(UpdateAboutManagementRequest $request, AboutManagement $aboutManagement)
    {
        $aboutManagement->update($request->all());

        if ($request->input('image', false)) {
            if (! $aboutManagement->image || $request->input('image') !== $aboutManagement->image->file_name) {
                if ($aboutManagement->image) {
                    $aboutManagement->image->delete();
                }
                $aboutManagement->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($aboutManagement->image) {
            $aboutManagement->image->delete();
        }

        if (count($aboutManagement->video) > 0) {
            foreach ($aboutManagement->video as $media) {
                if (! in_array($media->file_name, $request->input('video', []))) {
                    $media->delete();
                }
            }
        }
        $media = $aboutManagement->video->pluck('file_name')->toArray();
        foreach ($request->input('video', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $aboutManagement->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('video');
            }
        }

        return redirect()->route('admin.about-managements.index');
    }

    public function show(AboutManagement $aboutManagement)
    {
        abort_if(Gate::denies('about_management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutManagements.show', compact('aboutManagement'));
    }

    public function destroy(AboutManagement $aboutManagement)
    {
        abort_if(Gate::denies('about_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutManagement->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutManagementRequest $request)
    {
        $aboutManagements = AboutManagement::find(request('ids'));

        foreach ($aboutManagements as $aboutManagement) {
            $aboutManagement->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('about_management_create') && Gate::denies('about_management_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AboutManagement();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
