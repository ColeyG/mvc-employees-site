@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="employee">
    <h2>Employee</h2>
    <?php
      $employee = App\Employee::find($employee);
    ?>
    <p>{{ $employee->name }}</p>
  </section>
@endsection
