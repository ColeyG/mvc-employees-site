@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <h2>Employee</h2>
  <p>{{  }}</p>
  <p>{{ App\Employee::find(app('request')->input('id')) }}</p>
@endsection
