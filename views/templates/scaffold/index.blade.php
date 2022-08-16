@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
    @else
        {{ $config->modelNames->humanPlural }}
    @endif
@@endsection

@@section('content')
<a class="page-action-btn btn-floating btn-large waves-effect waves-light" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}"><i class="material-icons">add</i></a>
<div class="row">
  <div class="col">
    @@include('materialize-templates::common.message')
    {!! $table !!}
  </div>
</div>
@@endsection
