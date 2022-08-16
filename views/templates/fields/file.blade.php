<!-- {{ $fieldTitle }} Field -->
<div class="row">
  <div class="input-field col s4">
    <div class="file-field input-field">
      <div class="btn">
        <span>
          @if($config->options->localized)
            @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'white-text']) !!}
          @else
            @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'white-text']) !!}
          @endif
        </span>
        @{!! Form::file('{{ $fieldName }}', null) !!}
      </div>
      <div class="file-path-wrapper">
        @{!! Form::text('{{ $fieldName }}', null, ['class' => 'file-path']) !!}
      </div>
    </div>
    @@error('{{ $fieldName }}')
      <span class="helper-text red-text">@{{ $message }}</span>
    @@enderror
  </div>
</div>
