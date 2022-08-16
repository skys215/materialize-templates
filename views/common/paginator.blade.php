@if ($paginator->hasPages())
  <ul class="pagination">
    @if ($paginator->onFirstPage())
      <li class="disabled">
        <a href="#!"><i class="material-icons">chevron_left</i></a>
      </li>
    @else
      <li>
        <a href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
          <i class="material-icons">chevron_left</i>
        </a>
      </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <li class="active"><a href="#">{{ $page }}</a></li>
                @else
                  <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li>
        <a href="{{ $paginator->nextPageUrl() }}">
          <i class="material-icons">chevron_right</i>
        </a>
      </li>
    @else
      <li class="disabled">
        <a href="#!">
          <i class="material-icons">chevron_right</i>
        </a>
      </li>
    @endif
  </ul>
@endif
