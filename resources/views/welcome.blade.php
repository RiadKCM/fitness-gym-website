<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #f0f0f0; /* Change the background color as needed */
        }

        .navbar-brand {
            font-weight: bold;
            text-decoration: none;
            color: #333; /* Change the text color as needed */
        }

        .navbar-nav {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    justify-content: space-between; /* Pour aligner les éléments à gauche et à droite */
}

.nav-item {
    margin-left: 1rem;
}

.nav-link {
    text-decoration: none;
    color: #333; /* Changez la couleur du texte au besoin */
    transition: color 0.3s ease; /* Ajout d'une transition au changement de couleur */
}

/* Style au survol des liens */
.nav-link:hover {
    color: #555; /* Change la couleur au survol */
}

        #loginButton {
            position: absolute;
            top: 30px; /* Ajustez la distance du haut */
            right: 30px;
        }
        #registerButton {
            position: absolute;
            top: 30px; /* Ajustez la distance du haut */
            right: 100px;
        }
        
    </style>
</head>
<body class="antialiased">
  @yield('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ '/' }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('abonnement') }}">Abonnement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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
</body>
</html>


    