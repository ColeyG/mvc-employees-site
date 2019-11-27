@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="employee">
    <h2>Employee</h2>
    <?php
      $employee = App\Employee::find($employee);
    ?>
    <h2>{{ $employee->name }}</h2>
    <p>{{ $employee->role }}</p>
    <div class="image">
      <img src="https://randomuser.me/api/portraits/{{ $employee->gender }}/{{ $employee->imageNumber }}.jpg" alt="Image of {{ $employee->name }}">
    </div>
    <p>{{ $employee->code }}</p>
    <p>
      This employee is a joy to work with! They quickly updated my application, answered my questions and came up with an implementation that worked for me. Looking forward to working with them again.
      <br><br>
      Fast, professional. Love this agent! I've worked with {{ $employee->name }} almost every day I've been working with them so far. He's been flexible and easy to communicate with.
      <br><br>
      Fantastic job, lovely service!! {{ $employee->name }} was professional, helpful and flexible. During the callback process I was "off the hook" and got the prompt information I needed and as quick as possible.
    </p>
    <p>
      {{ $employee->name }} was wonderful with {{ $employee->role }}-ing. Thanks again for the thought and effort you put into doing that.
      <br><br>
      The high priced prices are like advertising for good yummy food. The service was less then adequate. The red in the beans smells up the whole restaurant. They could have covered up the stain with a slice of bread and some vinegar.
      <br><br>
      Ew. The pancakes. Disgusting. I couldn't believe my eyes when I saw this. Seriously, I had to move away from it.
    </p>
  </section>
@endsection
