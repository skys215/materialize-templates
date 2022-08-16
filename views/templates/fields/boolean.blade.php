<!-- 'Boolean {{ $fieldTitle }} Field' checked by default -->
<div class="row">
  <div class="input-field col s4">
    @if($config->options->localized)
        @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
        @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif
    <label>
        @{!! Form::checkbox('{{ $fieldName }}', 1, true) !!}
        <!-- remove {, true} to make it unchecked by default -->
    </label>
    @@error('{{ $fieldName }}')
        <span class="helper-text red-text">@{{ $message }}</span>
    @@enderror
  </div>
</div>