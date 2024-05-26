<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOrganizationCommitteeRequest;
use App\Http\Requests\StoreOrganizationCommitteeRequest;
use App\Http\Requests\UpdateOrganizationCommitteeRequest;
use App\Models\CommitteeCategory;
use App\Models\OrganizationCommittee;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OrganizationCommitteeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('organization_committee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organizationCommittees = OrganizationCommittee::with(['category', 'media'])->get();

        return view('admin.organizationCommittees.index', compact('organizationCommittees'));
    }

    public function create()
    {
        abort_if(Gate::denies('organization_committee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = CommitteeCategory::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.organizationCommittees.create', compact('categories'));
    }

    public function store(StoreOrganizationCommitteeRequest $request)
    {
        $organizationCommittee = OrganizationCommittee::create($request->all());

        if ($request->input('image', false)) {
            $organizationCommittee->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $organizationCommittee->id]);
        }

        return redirect()->route('admin.organization-committees.index');
    }

    public function edit(OrganizationCommittee $organizationCommittee)
    {
        abort_if(Gate::denies('organization_committee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = CommitteeCategory::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $organizationCommittee->load('category');

        return view('admin.organizationCommittees.edit', compact('categories', 'organizationCommittee'));
    }

    public function update(UpdateOrganizationCommitteeRequest $request, OrganizationCommittee $organizationCommittee)
    {
        $organizationCommittee->update($request->all());

        if ($request->input('image', false)) {
            if (! $organizationCommittee->image || $request->input('image') !== $organizationCommittee->image->file_name) {
                if ($organizationCommittee->image) {
                    $organizationCommittee->image->delete();
                }
                $organizationCommittee->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($organizationCommittee->image) {
            $organizationCommittee->image->delete();
        }

        return redirect()->route('admin.organization-committees.index');
    }

    public function show(OrganizationCommittee $organizationCommittee)
    {
        abort_if(Gate::denies('organization_committee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organizationCommittee->load('category');

        return view('admin.organizationCommittees.show', compact('organizationCommittee'));
    }

    public function destroy(OrganizationCommittee $organizationCommittee)
    {
        abort_if(Gate::denies('organization_committee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organizationCommittee->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrganizationCommitteeRequest $request)
    {
        $organizationCommittees = OrganizationCommittee::find(request('ids'));

        foreach ($organizationCommittees as $organizationCommittee) {
            $organizationCommittee->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('organization_committee_create') && Gate::denies('organization_committee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OrganizationCommittee();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
