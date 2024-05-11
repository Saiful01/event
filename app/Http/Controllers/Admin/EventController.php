<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::with(['media'])->get();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->all());

        if ($request->input('website_logo', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . basename($request->input('website_logo'))))->toMediaCollection('website_logo');
        }

        if ($request->input('event_logo', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . basename($request->input('event_logo'))))->toMediaCollection('event_logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $event->id]);
        }

        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->all());

        if ($request->input('website_logo', false)) {
            if (! $event->website_logo || $request->input('website_logo') !== $event->website_logo->file_name) {
                if ($event->website_logo) {
                    $event->website_logo->delete();
                }
                $event->addMedia(storage_path('tmp/uploads/' . basename($request->input('website_logo'))))->toMediaCollection('website_logo');
            }
        } elseif ($event->website_logo) {
            $event->website_logo->delete();
        }

        if ($request->input('event_logo', false)) {
            if (! $event->event_logo || $request->input('event_logo') !== $event->event_logo->file_name) {
                if ($event->event_logo) {
                    $event->event_logo->delete();
                }
                $event->addMedia(storage_path('tmp/uploads/' . basename($request->input('event_logo'))))->toMediaCollection('event_logo');
            }
        } elseif ($event->event_logo) {
            $event->event_logo->delete();
        }

        return redirect()->route('admin.events.index');
    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.show', compact('event'));
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        $events = Event::find(request('ids'));

        foreach ($events as $event) {
            $event->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('event_create') && Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Event();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}