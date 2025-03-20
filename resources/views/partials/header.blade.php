<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<style>
  .navbar-nav .nav-link.active {
    color: black;
    text-decoration: underline;
  }

  .navbar-nav .nav-link {
    color: gray;
    text-decoration: none;
  }

  .navbar-nav .nav-link:hover {
    color: black;
    text-decoration: underline;
  }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" style="width: 50px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Comics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('movies') ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('games') ? 'active' : '' }}" href="{{ route('games') }}">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>