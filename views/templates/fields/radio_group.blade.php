<!-- {{ $fieldTitle }} Field -->
<div class="form-group row mb-3">
  <div class="col s1">
    @if($config->options->localized)
      @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
      @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif
  </div>
  <div class="col s3">
    {!! $radioButtons !!}
  </div>
</div>

@@error('{{ $fieldName }}')
<div class="row">
  <div class="col">
    <span class="helper-text red-text">@{{ $message }}</span>
  </div>
</div>
@@enderror
