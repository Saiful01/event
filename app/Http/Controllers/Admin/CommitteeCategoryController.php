<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommitteeCategoryRequest;
use App\Http\Requests\StoreCommitteeCategoryRequest;
use App\Http\Requests\UpdateCommitteeCategoryRequest;
use App\Models\CommitteeCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommitteeCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('committee_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $committeeCategories = CommitteeCategory::all();

        return view('admin.committeeCategories.index', compact('committeeCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('committee_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.committeeCategories.create');
    }

    public function store(StoreCommitteeCategoryRequest $request)
    {
        $committeeCategory = CommitteeCategory::create($request->all());

        return redirect()->route('admin.committee-categories.index');
    }

    public function edit(CommitteeCategory $committeeCategory)
    {
        abort_if(Gate::denies('committee_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.committeeCategories.edit', compact('committeeCategory'));
    }

    public function update(UpdateCommitteeCategoryRequest $request, CommitteeCategory $committeeCategory)
    {
        $committeeCategory->update($request->all());

        return redirect()->route('admin.committee-categories.index');
    }

    public function show(CommitteeCategory $committeeCategory)
    {
        abort_if(Gate::denies('committee_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $committeeCategory->load('categoryOrganizationCommittees');

        return view('admin.committeeCategories.show', compact('committeeCategory'));
    }

    public function destroy(CommitteeCategory $committeeCategory)
    {
        abort_if(Gate::denies('committee_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $committeeCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommitteeCategoryRequest $request)
    {
        $committeeCategories = CommitteeCategory::find(request('ids'));

        foreach ($committeeCategories as $committeeCategory) {
            $committeeCategory->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
