<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('frontend/style.css') }}"> <!-- Lien vers la feuille de styles personnalisée -->
  @stack('title')
  <style>
    /* Ajoutez ici vos styles personnalisés */
    body {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{ route('index') }}">Chatterie  des embruns celeste</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-label="Toggle navigation">
      <label class="hamburger">
        <input type="checkbox">
        <svg viewBox="0 0 32 32">
          <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
          <path class="line" d="M7 16 27 16"></path>
        </svg>
      </label>
    </button>

   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

      </ul>
    </div>
  </nav>


  <div class="barre center">

    <ul>
      <li class="nav-link"><a href="{{ route('index') }}">Accueil</a></li>
      <li><a class="nav-link" href="{{ route('available_cats') }}">Chats disponibles</a></li>
      <li><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
      <li><a class="nav-link" href="{{ route('about') }}">À propos</a></li>
    </ul>
    @stack('logo')
    {{-- <img src="{{ url('frontend/logo.png') }}" class="logo" alt="logo"> --}}
  </div>
