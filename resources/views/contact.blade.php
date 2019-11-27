@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="contact">
    <h2>Contact</h2>
    <p>Feel free to reach out with any feedback or questions!</p>
    <form class="form" action="/contactMessage" method="POST">
      @csrf
      <input type="text">
      <input type="text">
      <textarea name="" id="" cols="30" rows="10"></textarea>
      <button type="submit">Submit</button>
    </form>
  </section>
@endsection
