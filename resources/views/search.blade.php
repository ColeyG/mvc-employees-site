@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="search employee-cards">
  @foreach($employees as $employee)
        <div class="employee-card">
          <div class="actions">
            <form action="">
              <a href="/employee/{{ $employee->id }}">More</a>
            </form>
            <form action="/employees/{{ $employee->id }}" method="POST">
            @method('DELETE')
            @csrf
              <button class="delete" type="submit">Delete</button>
            </form>
          </div>
          <div class="text">
            <h3>{{ $employee->name }}</h3>
            <p>{{ $employee->role }}</p>
            <p>Code: {{ $employee->code }}</p>
          </div>
          <div class="image">
            <img src="https://randomuser.me/api/portraits/{{ $employee->gender }}/{{ $employee->imageNumber }}.jpg" alt="Image of {{ $employee->name }}">
          </div>
        </div>
      @endforeach
  </section>
@endsection
