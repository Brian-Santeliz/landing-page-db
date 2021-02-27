<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Nosotros</title>
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web/css/all.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>

  <body>
    <?php 
    require('templates/navbar.php')
   ?>
    <header class="header">
      <div class="banner">
        <h3 class="banner-subtitle">Comida naturalmente saludable</h3>
        <h1 class="banner-title">Nosotros</h1>
        <a href="index.php" class="banner-btn">Inicio</a>
      </div>
    </header>
    <div class="content-divider"></div>
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
    <?php
    require('templates/footer.php');
  ?>
  </body>
</html>
