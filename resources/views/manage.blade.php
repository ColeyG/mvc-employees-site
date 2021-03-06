@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="manage">
    <h2>Manage</h2>
    <a class="create" href="/createemployee">Create an Employee</a>
    <table class="employee-table">
      <tr>
        <td>Name</td>
        <td>Role</td>
        <td>ID</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      @if(App\Employee::all()->isNotEmpty())
        @foreach(App\Employee::all() as $employee)
        <tr>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->role }}</td>
          <td>{{ $employee->code }}</td>
          <td><a href="/employee/{{ $employee->id }}"><button>More</button></a></td>
          <td><a href="/edit/{{ $employee->id }}"><button>Edit</button></a></td>
          <td><form action="/employees/{{ $employee->id }}" method="POST">
            @method('DELETE')
            @csrf
              <button class="delete" type="submit">Delete</button>
            </form></td>
        </tr>
        @endforeach
      @endif
    </table>
  </section>
@endsection
