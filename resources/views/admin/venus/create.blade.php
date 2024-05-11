@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.venu.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.venus.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="suggested_accommodation">{{ trans('cruds.venu.fields.suggested_accommodation') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('suggested_accommodation') ? 'is-invalid' : '' }}" name="suggested_accommodation" id="suggested_accommodation">{!! old('suggested_accommodation') !!}</textarea>
                @if($errors->has('suggested_accommodation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('suggested_accommodation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.venu.fields.suggested_accommodation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="host_venu">{{ trans('cruds.venu.fields.host_venu') }}</label>
                <textarea class="form-control {{ $errors->has('host_venu') ? 'is-invalid' : '' }}" name="host_venu" id="host_venu">{{ old('host_venu') }}</textarea>
                @if($errors->has('host_venu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('host_venu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.venu.fields.host_venu_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.venus.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $venu->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection