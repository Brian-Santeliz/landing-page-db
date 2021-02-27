<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Nosotros</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web/css/all.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>

  <body>
    <!-- nav button -->
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
    <!-- seccion aparte -->
    <header class="header">
      <div class="banner">
        <h3 class="banner-subtitle">Comida naturalmente saludable</h3>
        <h1 class="banner-title">Nosotros</h1>
        <a href="index.php" class="banner-btn">Inicio</a>
      </div>
    </header>
    <!-- seccion aparte -->
    <div class="content-divider"></div>
    <!-- skills section -->
    <!-- about -->
    <section class="about">
      <div class="section-center clearfix">
        <article class="about-img">
          <div class="about-picture-container">
            <img
              src="./images/pasta.jpg"
              alt="tea kettle"
              class="about-picture"
            />
          </div>
        </article>
        <article class="about-info">
          <div>
            <h3 class="section-subtitle">Nosotros</h3>
            <h2 class="section-title">Mundo Natural</h2>
          </div>
          <p class="about-text">
            Somos un restaurante orgánico, que tiene como principios, un local
            cuya captación de clientes está basada en una oferta realizada con
            productos naturales
          </p>
          <p class="about-text">
            Provenientes de la agricultura ecológica certificada, libre de
            conservantes y químicos.
          </p>
          <p class="about-text">
            Los restaurantes de comida natural suelen existir para hacer
            beneficios, así como para promocionar un mensaje, que es apoyar los
            beneficios de las dietas de comida cruda o fomentar que la gente
            tome comidas sostenibles.
          </p>
          <a href="caracteristicas.php" class="main-btn">Características</a>
        </article>
      </div>
    </section>
    <!-- end of about -->

    <?php
    require('templates/footer.php');
  ?>