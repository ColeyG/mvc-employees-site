@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <h2>Employee</h2>
  <?php
    $employee = App\Employee::find($employee);
  ?>
  <p>{{ $employee->name }}</p>
@endsection
