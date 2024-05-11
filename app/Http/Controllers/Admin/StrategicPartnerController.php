<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStrategicPartnerRequest;
use App\Http\Requests\StoreStrategicPartnerRequest;
use App\Http\Requests\UpdateStrategicPartnerRequest;
use App\Models\StrategicPartner;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StrategicPartnerController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('strategic_partner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $strategicPartners = StrategicPartner::with(['media'])->get();

        return view('admin.strategicPartners.index', compact('strategicPartners'));
    }

    public function create()
    {
        abort_if(Gate::denies('strategic_partner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.strategicPartners.create');
    }

    public function store(StoreStrategicPartnerRequest $request)
    {
        $strategicPartner = StrategicPartner::create($request->all());

        if ($request->input('image', false)) {
            $strategicPartner->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $strategicPartner->id]);
        }

        return redirect()->route('admin.strategic-partners.index');
    }

    public function edit(StrategicPartner $strategicPartner)
    {
        abort_if(Gate::denies('strategic_partner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.strategicPartners.edit', compact('strategicPartner'));
    }

    public function update(UpdateStrategicPartnerRequest $request, StrategicPartner $strategicPartner)
    {
        $strategicPartner->update($request->all());

        if ($request->input('image', false)) {
            if (! $strategicPartner->image || $request->input('image') !== $strategicPartner->image->file_name) {
                if ($strategicPartner->image) {
                    $strategicPartner->image->delete();
                }
                $strategicPartner->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($strategicPartner->image) {
            $strategicPartner->image->delete();
        }

        return redirect()->route('admin.strategic-partners.index');
    }

    public function show(StrategicPartner $strategicPartner)
    {
        abort_if(Gate::denies('strategic_partner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.strategicPartners.show', compact('strategicPartner'));
    }

    public function destroy(StrategicPartner $strategicPartner)
    {
        abort_if(Gate::denies('strategic_partner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $strategicPartner->delete();

        return back();
    }

    public function massDestroy(MassDestroyStrategicPartnerRequest $request)
    {
        $strategicPartners = StrategicPartner::find(request('ids'));

        foreach ($strategicPartners as $strategicPartner) {
            $strategicPartner->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('strategic_partner_create') && Gate::denies('strategic_partner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new StrategicPartner();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
