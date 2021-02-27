<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Características</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web/css/all.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>

  <body>
    <span class="nav-btn" id="nav-btn">
      <i class="fas fa-bars"></i>
    </span>
    <nav class="navbar" id="navbar">
      <div class="navbar-header">
        <span class="nav-close" id="nav-close">
          <i class="fas fa-times"></i>
        </span>
      </div>
      <ul class="nav-items">
        <li><a href="index.php" class="nav-link">Inicio</a></li>
        <li>
          <a href="caracteristicas.php" class="nav-link">Características</a>
        </li>
        <li><a href="nosotros.php" class="nav-link">Nosotros</a></li>
        <li><a href="platos.php" class="nav-link">Platos</a></li>
      </ul>
    </nav>
    <!-- SECCION APARTE -->

    <!-- SECCION APARTE -->
    <!-- seccion aparte -->
    <header class="header">
      <div class="banner">
        <h3 class="banner-subtitle">Comida naturalmente saludable</h3>
        <h1 class="banner-title">Nuestroas Características</h1>
        <a href="index.php" class="banner-btn">Inicio</a>
      </div>
    </header>
    <!-- seccion aparte -->
    <!-- SECCION APARTE -->

    <div class="content-divider"></div>
    <section class="skills clearfix">
      <article class="skill">
        <span class="skill-icon">
          <i class="fas fa-heart"></i>
        </span>
        <h3 class="skill-title">Hecho con amor</h3>
        <p class="skill-text">
          Más de 5 años ofreciendo calidad en nuestros servicios y comidad.
          Nuestro trabajo proviene del corazón
        </p>
      </article>
      <article class="skill">
        <span class="skill-icon">
          <i class="fas fa-glass-cheers"></i>
        </span>
        <h3 class="skill-title">Relajate</h3>
        <p class="skill-text">
          Deja que la comida sea tu medicina, cuidamos tu alimentación
        </p>
      </article>
      <article class="skill">
        <span class="skill-icon">
          <i class="fas fa-bomb"></i>
        </span>
        <h3 class="skill-title">Energético</h3>
        <p class="skill-text">
          Incorpora energia a tu dieta con las mejores recetas y exquisitos
          platos
        </p>
      </article>
      <article class="skill">
        <span class="skill-icon">
          <i class="fas fa-mortar-pestle"></i>
        </span>
        <h3 class="skill-title">Artesanal</h3>
        <p class="skill-text">
          Conservando técnicas ancestrales y a su vez difundir la riqueza de sus
          sabores
        </p>
      </article>
    </section>

    <!-- SECCION APARTE -->
    <?php
    require('templates/footer.php');
  ?>