<!-- {{ $fieldTitle }} Field -->
<div class="row">
  <div class="input-field col s4">
    @{!! Form::number('{{ $fieldName }}', null, [@php if(isset($options)) { echo htmlspecialchars_decode($options); } @endphp]) !!}

    @if($config->options->localized)
      @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
      @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif

    @@error('{{ $fieldName }}')
        <span class="helper-text red-text">@{{ $message }}</span>
    @@enderror
  </div>
</div>
