@@push('third_party_stylesheets')
    @@include('layouts.datatables_css')
@@endpush

@{!! $dataTable->table(['width' => '100%', 'class' => 'table striped']) !!}

@@push('third_party_scripts')
    @@include('layouts.datatables_js')
    @{!! $dataTable->scripts() !!}
@@endpush
