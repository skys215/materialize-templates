<div class="table-actions">
    <a href="{{ $showUrl }}" class='btn blue white-text'>
        @if($config->options->localized)
    @@lang('crud.detail')
    @else
        View
    @endif
    </a>
    <a href="{{ $editUrl }}" class='btn green white-text'>
        @if($config->options->localized)
    @@lang('crud.edit')
    @else
        Edit
    @endif
    </a>
    <a class='btn red white-text' wire:click="deleteRecord({{ $recordId }})"
       onclick="confirm('Are you sure you want to remove this Record?') || event.stopImmediatePropagation()">
        @if($config->options->localized)
    __('crud.delete')
    @else
        'Delete'
    @endif
    </a>
</div>