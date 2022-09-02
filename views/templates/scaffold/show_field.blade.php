<!-- {{ $fieldTitle }} Field -->
<div class="form-group mb-3 row">
  @if($config->options->localized)
    <h6 class="col s3">{{ '{{' }}__('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')}}:</h6>
  @else
    <h6 class="col s3">{{ $fieldTitle }}:</h6>
  @endif
  <h6 class="col s9">
    {{ '{{' }} ${!! $config->modelNames->camel !!}->{!! $fieldName !!} }}
  </h6>
</div>
