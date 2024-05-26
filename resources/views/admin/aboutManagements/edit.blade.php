@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.aboutManagement.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.about-managements.update", [$aboutManagement->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="welcome_message">{{ trans('cruds.aboutManagement.fields.welcome_message') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('welcome_message') ? 'is-invalid' : '' }}" name="welcome_message" id="welcome_message">{!! old('welcome_message', $aboutManagement->welcome_message) !!}</textarea>
                @if($errors->has('welcome_message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('welcome_message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.welcome_message_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about_text">{{ trans('cruds.aboutManagement.fields.about_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('about_text') ? 'is-invalid' : '' }}" name="about_text" id="about_text">{!! old('about_text', $aboutManagement->about_text) !!}</textarea>
                @if($errors->has('about_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.about_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about_the_conference">{{ trans('cruds.aboutManagement.fields.about_the_conference') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('about_the_conference') ? 'is-invalid' : '' }}" name="about_the_conference" id="about_the_conference">{!! old('about_the_conference', $aboutManagement->about_the_conference) !!}</textarea>
                @if($errors->has('about_the_conference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about_the_conference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.about_the_conference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scope_of_the_conference">{{ trans('cruds.aboutManagement.fields.scope_of_the_conference') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('scope_of_the_conference') ? 'is-invalid' : '' }}" name="scope_of_the_conference" id="scope_of_the_conference">{!! old('scope_of_the_conference', $aboutManagement->scope_of_the_conference) !!}</textarea>
                @if($errors->has('scope_of_the_conference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scope_of_the_conference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.scope_of_the_conference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="program_schedule">{{ trans('cruds.aboutManagement.fields.program_schedule') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('program_schedule') ? 'is-invalid' : '' }}" name="program_schedule" id="program_schedule">{!! old('program_schedule', $aboutManagement->program_schedule) !!}</textarea>
                @if($errors->has('program_schedule'))
                    <div class="invalid-feedback">
                        {{ $errors->first('program_schedule') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.program_schedule_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.aboutManagement.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="video">{{ trans('cruds.aboutManagement.fields.video') }}</label>
                <div class="needsclick dropzone {{ $errors->has('video') ? 'is-invalid' : '' }}" id="video-dropzone">
                </div>
                @if($errors->has('video'))
                    <div class="invalid-feedback">
                        {{ $errors->first('video') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutManagement.fields.video_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.about-managements.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $aboutManagement->id ?? 0 }}');
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

<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.about-managements.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutManagement) && $aboutManagement->image)
      var file = {!! json_encode($aboutManagement->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    var uploadedVideoMap = {}
Dropzone.options.videoDropzone = {
    url: '{{ route('admin.about-managements.storeMedia') }}',
    maxFilesize: 20, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="video[]" value="' + response.name + '">')
      uploadedVideoMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedVideoMap[file.name]
      }
      $('form').find('input[name="video[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($aboutManagement) && $aboutManagement->video)
          var files =
            {!! json_encode($aboutManagement->video) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="video[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection