<!-- {{ $fieldTitle }} Field -->
<div class="row">
  <div class="col s1">
    @if($config->options->localized)
      @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
      @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif
  </div>
  <div class="col s3">
    <label>
			@{!! Form::checkbox('{{ $fieldName }}', '{{ $checkboxVal }}', null) !!}
      <span>{{ $fieldName }}</span>
    </label>
  </div>
</div>

@@error('{{ $fieldName }}')
<div class="row">
  <div class="col">
    <span class="helper-text red-text">@{{ $message }}</span>
  </div>
</div>
@@enderror
