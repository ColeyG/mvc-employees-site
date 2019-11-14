@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="employee-cards">
    @if(App\Employee::all()->isNotEmpty())
      @foreach(App\Employee::all() as $employee)
        <div class="employee-card">
          <div class="actions">
            <button>Some</button>
            <button>Delete</button>
          </div>
          <div class="text">
            <h3>{{ $employee->name }}</h3>
            <p>{{ $employee->role }}</p>
            <p>Code: {{ $employee->code }}</p>
          </div>
          <div class="image">
            <img src="https://randomuser.me/api/portraits/men/0.jpg" alt="User Image">
          </div>
        </div>
      @endforeach
    @endif
  </section>
@endsection
