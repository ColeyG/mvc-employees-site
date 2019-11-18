<header class="primary-header">
  <h1>Employees</h1>
  <nav class="primary-navigation">
    <ul>
      <li><a href="{{ URL::route('home') }}">Home</a></li>
      <li><a href="{{ URL::route('about') }}">About</a></li>
      <li><a href="{{ URL::route('manage') }}">Manage Employees</a></li>
      <li><a href="{{ URL::route('contact') }}">Contact</a></li>
    </ul>
    <div class="search">
      <input type="text">
      <button>Search</button>
    </div>
  </nav>
</header>
