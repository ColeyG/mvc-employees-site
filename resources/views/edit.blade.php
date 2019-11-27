@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="edit contact">
    <h2>Edit an Employee:</h2>
    <?php
      $employee = App\Employee::find($employee);
    ?>
    <form class="form" action="/editemployeeaction" method="POST">
    @csrf
      <input type="text" name="id" value="{{ $employee->id }}" hidden>
      <input type="text" name="name" value="{{ $employee->name }}">
      <input type="text" name="role" value="{{ $employee->role }}">
      <input type="text" name="code" value="{{ $employee->code }}">
      <label for="image">Image * (0-99)</label>
      <input name="image" type="number" min="0" max="99" style="width: 100px;" value="{{ $employee->imageNumber }}" placeholder="Image">
      <select name="gender">
        @if($employee->gender==='women') 
          <option value="women" selected="selected">Female</option>
          <option value="men">Male</option>
        @else
          <option value="women">Female</option>
          <option value="men" selected="selected">Male</option>
        @endif
      </select>
      <button type="submit">Submit</button>
    </form>
  </section>
@endsection
