<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySubmissionRequest;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\Submission;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SubmissionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('submission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $submissions = Submission::with(['media'])->get();

        return view('admin.submissions.index', compact('submissions'));
    }

    public function create()
    {
        abort_if(Gate::denies('submission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.submissions.create');
    }

    public function store(StoreSubmissionRequest $request)
    {
        $submission = Submission::create($request->all());

        if ($request->input('absract_file', false)) {
            $submission->addMedia(storage_path('tmp/uploads/' . basename($request->input('absract_file'))))->toMediaCollection('absract_file');
        }

        if ($request->input('submission_file', false)) {
            $submission->addMedia(storage_path('tmp/uploads/' . basename($request->input('submission_file'))))->toMediaCollection('submission_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $submission->id]);
        }

        return redirect()->route('admin.submissions.index');
    }

    public function edit(Submission $submission)
    {
        abort_if(Gate::denies('submission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.submissions.edit', compact('submission'));
    }

    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {
        $submission->update($request->all());

        if ($request->input('absract_file', false)) {
            if (! $submission->absract_file || $request->input('absract_file') !== $submission->absract_file->file_name) {
                if ($submission->absract_file) {
                    $submission->absract_file->delete();
                }
                $submission->addMedia(storage_path('tmp/uploads/' . basename($request->input('absract_file'))))->toMediaCollection('absract_file');
            }
        } elseif ($submission->absract_file) {
            $submission->absract_file->delete();
        }

        if ($request->input('submission_file', false)) {
            if (! $submission->submission_file || $request->input('submission_file') !== $submission->submission_file->file_name) {
                if ($submission->submission_file) {
                    $submission->submission_file->delete();
                }
                $submission->addMedia(storage_path('tmp/uploads/' . basename($request->input('submission_file'))))->toMediaCollection('submission_file');
            }
        } elseif ($submission->submission_file) {
            $submission->submission_file->delete();
        }

        return redirect()->route('admin.submissions.index');
    }

    public function show(Submission $submission)
    {
        abort_if(Gate::denies('submission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.submissions.show', compact('submission'));
    }

    public function destroy(Submission $submission)
    {
        abort_if(Gate::denies('submission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $submission->delete();

        return back();
    }

    public function massDestroy(MassDestroySubmissionRequest $request)
    {
        $submissions = Submission::find(request('ids'));

        foreach ($submissions as $submission) {
            $submission->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('submission_create') && Gate::denies('submission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Submission();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
