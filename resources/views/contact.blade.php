@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="contact">
    <h2>Contact</h2>
    <p>Feel free to reach out with any feedback or questions!</p>
    <ul class="error-list">
      @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
      @endforeach
    </ul>
    <p class="required">* Required</p>
    <form class="form" action="/contactMessage" method="POST">
      @csrf
      <label for="name">Name *</label>
      <input name="name" type="text" placeholder="Name">
      <label for="email">Email *</label>
      <input name="email" type="text" placeholder="Email">
      <label for="message">Message *</label>
      <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
      <button type="submit">Submit</button>
    </form>
  </section>
@endsection
