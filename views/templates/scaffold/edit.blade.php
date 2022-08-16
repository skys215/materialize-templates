@@extends('layouts.app')

@@section('title')
  @if($config->options->localized)
      @@lang('crud.edit') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
  @else
      Edit {{ $config->modelNames->human }}
  @endif
@@endsection

@@section('content')
  @@include('materialize-templates::common.errors')
  @{!! Form::model(${{ $config->modelNames->camel }}, ['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.update', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'patch', 'role' => 'form']) !!}
    @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')
    <div class="row">
      <div class="col">
          <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn red">
            @if($config->options->localized) @@lang('crud.cancel') @else Cancel @endif
          </a>
      </div>
      <div class="col">
        @{!! Form::submit(@if($config->options->localized) @@lang('crud.save') @else 'Save' @endif, ['class' => 'btn blue']) !!}
      </div>
    </div>
  @{!! Form::close() !!}
@@endsection

@@push('page_scripts')
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, {});

  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems, {});
});
</script>
@@endpush