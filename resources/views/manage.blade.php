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
      <tr>
        <td>asdf</td>
        <td>asdf</td>
        <td>asdf</td>
        <td><button>More</button></td>
        <td><button>Edit</button></td>
        <td><button>Delete</button></td>
      </tr>
    </table>
  </section>
@endsection
