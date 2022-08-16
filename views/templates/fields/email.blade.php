<!-- {{ $fieldTitle }} Field -->
<div class="row">
  <div class="input-field col s4">
    @if($config->options->localized)
      @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
      @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif
    @{!! Form::email('{{ $fieldName }}', null, [@php if(isset($options)) { echo htmlspecialchars_decode($options); } @endphp]) !!}

    @@error('{{ $fieldName }}')
        <span class="helper-text red-text">@{{ $message }}</span>
    @@enderror
  </div>
</div>
