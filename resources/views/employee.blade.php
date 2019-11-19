@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <h2>Employee</h2>
  <?php
    $gamer = App\Employee::find(app('request')->input('id'));
  ?>
  <p>{{ $gamer->name }}</p>
@endsection
