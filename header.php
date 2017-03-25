<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>

    <!-- Page styles -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="assets/icon.css">
    <link rel="stylesheet" href="assets/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/pyt/">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Login</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="registro.php">Registro</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="denuncia.php">Denuncia</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="rastreo.php">Rastreo</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="backlist.php">Blacklist</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="ayuda.php">contacto</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item"><a>Mi cuenta</a></li>
            <li class="mdl-menu__item"><a>Configuración</a></li>
            <li class="mdl-menu__item"><a>Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/logo.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="/pyt/">Home</a>
          <a class="mdl-navigation__link" href="login.php">Login</a>
          <a class="mdl-navigation__link" href="registro.php">Registro</a>
          <a class="mdl-navigation__link" href="denuncia.php">Denuncia</a>
          <a class="mdl-navigation__link" href="rastreo.php">Rastreo</a>
          <a class="mdl-navigation__link" href="backlist.php">Blacklist</a>
          <a class="mdl-navigation__link" href="ayuda.php">contacto</a>
  
        </nav>
      </div>