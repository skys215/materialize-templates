<label>
  @{!! Form::radio('{{ $fieldName }}', "{{ $value }}", null) !!}
  <span> {{ $label }}</span>
</label>

@@error('{{ $fieldName }}')
<div class="row">
  <div class="col">
    <span class="helper-text red-text">@{{ $message }}</span>
  </div>
</div>
@@enderror
