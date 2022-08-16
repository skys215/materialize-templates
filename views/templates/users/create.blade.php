@extends('layouts.app')

@section('title')
  Create User
@endsection

@section('content')
  @include('materialize-templates::common.errors')
      {!! Form::open(['route' => 'users.store', 'role' => 'form']) !!}
        @include('users.fields')
        <div class="row">
          <div class="col">
              <a href="{{ route('users.index') }}" class="btn red">
                 Cancel               </a>
          </div>
          <div class="col">
            {!! Form::submit( 'Save' , ['class' => 'btn blue']) !!}
          </div>
        </div>
  {!! Form::close() !!}
@endsection

@push('page_scripts')
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, {});

  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems, {});
});
</script>
@endpush