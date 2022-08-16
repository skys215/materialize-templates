@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('models/{!! $config->modelNames->camelPlural !!}.singular') @@lang('crud.detail')
    @else
        {{ $config->modelNames->human }} Details
    @endif
@@endsection

@@section('content')
  @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.show_fields')
  <div class="row">
    <div class="col">
        <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn red">
          @if($config->options->localized) @@lang('crud.back') @else Back @endif
        </a>
    </div>
  </div>
@@endsection
