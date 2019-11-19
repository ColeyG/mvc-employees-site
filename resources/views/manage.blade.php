@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="manage">
    <h2>Manage</h2>
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
          <td><a href="/employee?id={{ $employee->id }}"><button>More</button></a></td>
          <td><button>Edit</button></td>
          <td><button>Delete</button></td>
        </tr>
        @endforeach
      @endif
    </table>
  </section>
@endsection
