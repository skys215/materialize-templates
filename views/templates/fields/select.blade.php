<!-- {{ $fieldTitle }} Field -->
<div class="row">
  <div class="input-field col s4">
    @{!! Form::select('{{ $fieldName }}', @php echo htmlspecialchars_decode($selectValues) @endphp, null) !!}

    @if($config->options->localized)
        @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
    @else
        @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
    @endif

  </div>
</div>

@@error('{{ $fieldName }}')
<div class="row">
  <div class="col">
    <span class="helper-text red-text">@{{ $message }}</span>
  </div>
</div>
@@enderror
