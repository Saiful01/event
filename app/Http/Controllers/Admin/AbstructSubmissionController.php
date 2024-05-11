<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAbstructSubmissionRequest;
use App\Http\Requests\StoreAbstructSubmissionRequest;
use App\Http\Requests\UpdateAbstructSubmissionRequest;
use App\Models\AbstructSubmission;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AbstructSubmissionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('abstruct_submission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $abstructSubmissions = AbstructSubmission::with(['media'])->get();

        return view('admin.abstructSubmissions.index', compact('abstructSubmissions'));
    }

    public function create()
    {
        abort_if(Gate::denies('abstruct_submission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.abstructSubmissions.create');
    }

    public function store(StoreAbstructSubmissionRequest $request)
    {
        $abstructSubmission = AbstructSubmission::create($request->all());

        if ($request->input('file', false)) {
            $abstructSubmission->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $abstructSubmission->id]);
        }

        return redirect()->route('admin.abstruct-submissions.index');
    }

    public function edit(AbstructSubmission $abstructSubmission)
    {
        abort_if(Gate::denies('abstruct_submission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.abstructSubmissions.edit', compact('abstructSubmission'));
    }

    public function update(UpdateAbstructSubmissionRequest $request, AbstructSubmission $abstructSubmission)
    {
        $abstructSubmission->update($request->all());

        if ($request->input('file', false)) {
            if (! $abstructSubmission->file || $request->input('file') !== $abstructSubmission->file->file_name) {
                if ($abstructSubmission->file) {
                    $abstructSubmission->file->delete();
                }
                $abstructSubmission->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($abstructSubmission->file) {
            $abstructSubmission->file->delete();
        }

        return redirect()->route('admin.abstruct-submissions.index');
    }

    public function show(AbstructSubmission $abstructSubmission)
    {
        abort_if(Gate::denies('abstruct_submission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.abstructSubmissions.show', compact('abstructSubmission'));
    }

    public function destroy(AbstructSubmission $abstructSubmission)
    {
        abort_if(Gate::denies('abstruct_submission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $abstructSubmission->delete();

        return back();
    }

    public function massDestroy(MassDestroyAbstructSubmissionRequest $request)
    {
        $abstructSubmissions = AbstructSubmission::find(request('ids'));

        foreach ($abstructSubmissions as $abstructSubmission) {
            $abstructSubmission->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('abstruct_submission_create') && Gate::denies('abstruct_submission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AbstructSubmission();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
