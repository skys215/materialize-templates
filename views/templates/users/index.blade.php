@extends('layouts.app')

@section('title')
  Users
@endsection

@section('content')
<a class="page-action-btn btn-floating btn-large waves-effect waves-light" href="{{ route('users.create') }}"><i class="material-icons">add</i></a>
<div class="row">
  <div class="col">
    @include('materialize-templates::common.message')
    @include('users.table')
  </div>
</div>
@endsection
