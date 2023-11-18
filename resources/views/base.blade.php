<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ '/' }}">GoMuscu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('Muscu.club') }}">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Muscu.coach') }}">Coach</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Muscu.abonnement') }}">Abonnement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Muscu.galerie') }}">Galerie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Muscu.horaire') }}">Horaires</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link" id="loginButton">Log in</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link" id="registerButton">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('content')
</body>
</html>
