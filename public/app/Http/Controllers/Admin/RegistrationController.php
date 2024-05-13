<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyRegistrationRequest;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('registration_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registrations = Registration::with(['media'])->get();

        return view('admin.registrations.index', compact('registrations'));
    }

    public function create()
    {
        abort_if(Gate::denies('registration_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrations.create');
    }

    public function store(StoreRegistrationRequest $request)
    {
        $registration = Registration::create($request->all());

        if ($request->input('payment_slip', false)) {
            $registration->addMedia(storage_path('tmp/uploads/' . basename($request->input('payment_slip'))))->toMediaCollection('payment_slip');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $registration->id]);
        }

        return redirect()->route('admin.registrations.index');
    }

    public function edit(Registration $registration)
    {
        abort_if(Gate::denies('registration_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrations.edit', compact('registration'));
    }

    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        $registration->update($request->all());

        if ($request->input('payment_slip', false)) {
            if (! $registration->payment_slip || $request->input('payment_slip') !== $registration->payment_slip->file_name) {
                if ($registration->payment_slip) {
                    $registration->payment_slip->delete();
                }
                $registration->addMedia(storage_path('tmp/uploads/' . basename($request->input('payment_slip'))))->toMediaCollection('payment_slip');
            }
        } elseif ($registration->payment_slip) {
            $registration->payment_slip->delete();
        }

        return redirect()->route('admin.registrations.index');
    }

    public function show(Registration $registration)
    {
        abort_if(Gate::denies('registration_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrations.show', compact('registration'));
    }

    public function destroy(Registration $registration)
    {
        abort_if(Gate::denies('registration_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registration->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegistrationRequest $request)
    {
        $registrations = Registration::find(request('ids'));

        foreach ($registrations as $registration) {
            $registration->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('registration_create') && Gate::denies('registration_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Registration();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
