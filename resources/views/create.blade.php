@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="contact create">
    <h2>Create Employee</h2>
    <ul class="error-list">
      @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
      @endforeach
    </ul>
    <p class="required">* Required</p>
    <form class="form" action="/createemployeeaction" method="POST">
      @csrf
      <label for="name">Name *</label>
      <input name="name" type="text" placeholder="Name">
      <label for="role">Role *</label>
      <input name="role" type="text" placeholder="Role">
      <label for="code">Code *</label>
      <input name="code" type="number" placeholder="Code">
      <label for="image">Image * (0-99)</label>
      <input name="image" type="number" min="0" max="99" style="width: 100px;" placeholder="Image">
      <label for="gender">Gender *</label>
      <select name="gender">
        <option value="women">Female</option>
        <option value="men">Male</option>
      </select>
      <button type="submit">Submit</button>
    </form>
  </section>
@endsection
