<li>
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class=" @{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? ' active' : '' }}">
        @if($config->options->localized)
          @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
        @else
          {{ $config->modelNames->humanPlural }}
        @endif
        <i class="material-icons left">@php $icons = ['ac_unit', 'account_balance', 'account_circle', 'airplay', 'all_inclusive', 'apps', 'announcement', 'archive', 'assessment', 'assistant_photo', 'attach_file', 'backup', 'book', 'bookmark', 'build', 'bug_report', 'business', 'business_center', 'call', 'chat', 'class'];echo $icons[array_rand($icons)] @endphp</i>
    </a>
</li>
