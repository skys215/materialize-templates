<!-- 'bootstrap / Toggle Switch {{ $fieldTitle }} Field' -->
<div class="row">
  <div class="input-field col s1">
    @if($config->options->localized)
        @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
        @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif
  </div>
  <div class="col s3">
    <div class="switch">
      <label>
        Off
        <input type="checkbox" name="{{ $fieldName }}">
        <span class="lever"></span>
        On
      </label>
    </div>
  </div>
</div>

@@error('{{ $fieldName }}')
<div class="row">
  <div class="col">
    <span class="helper-text red-text">@{{ $message }}</span>
  </div>
</div>
@@enderror
