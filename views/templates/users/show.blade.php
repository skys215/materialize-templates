@extends('layouts.app')

@section('title')
  User Details
@endsection

@section('content')
  @include('users.show_fields')
  <div class="row">
    <div class="col">
        <a href="{{ route('users.index') }}" class="btn red">Back</a>
    </div>
  </div>
@endsection
