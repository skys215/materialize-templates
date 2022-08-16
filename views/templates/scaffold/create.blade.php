@@extends('layouts.app')

@@section('title')
  @if($config->options->localized)
      @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
  @else
      Create {{ $config->modelNames->humanPlural }}
  @endif  
@@endsection

@@section('content')
  @@include('materialize-templates::common.errors')
  @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store', 'role' => 'form']) !!}
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