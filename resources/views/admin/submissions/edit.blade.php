@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.submission.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.submissions.update", [$submission->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="abstract">{{ trans('cruds.submission.fields.abstract') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('abstract') ? 'is-invalid' : '' }}" name="abstract" id="abstract">{!! old('abstract', $submission->abstract) !!}</textarea>
                @if($errors->has('abstract'))
                    <div class="invalid-feedback">
                        {{ $errors->first('abstract') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.submission.fields.abstract_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="full_paper">{{ trans('cruds.submission.fields.full_paper') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('full_paper') ? 'is-invalid' : '' }}" name="full_paper" id="full_paper">{!! old('full_paper', $submission->full_paper) !!}</textarea>
                @if($errors->has('full_paper'))
                    <div class="invalid-feedback">
                        {{ $errors->first('full_paper') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.submission.fields.full_paper_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="absract_file">{{ trans('cruds.submission.fields.absract_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('absract_file') ? 'is-invalid' : '' }}" id="absract_file-dropzone">
                </div>
                @if($errors->has('absract_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('absract_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.submission.fields.absract_file_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="submission_file">{{ trans('cruds.submission.fields.submission_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('submission_file') ? 'is-invalid' : '' }}" id="submission_file-dropzone">
                </div>
                @if($errors->has('submission_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('submission_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.submission.fields.submission_file_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.submissions.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $submission->id ?? 0 }}');
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
    Dropzone.options.absractFileDropzone = {
    url: '{{ route('admin.submissions.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="absract_file"]').remove()
      $('form').append('<input type="hidden" name="absract_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="absract_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($submission) && $submission->absract_file)
      var file = {!! json_encode($submission->absract_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="absract_file" value="' + file.file_name + '">')
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
    Dropzone.options.submissionFileDropzone = {
    url: '{{ route('admin.submissions.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="submission_file"]').remove()
      $('form').append('<input type="hidden" name="submission_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="submission_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($submission) && $submission->submission_file)
      var file = {!! json_encode($submission->submission_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="submission_file" value="' + file.file_name + '">')
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
@endsection