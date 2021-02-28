<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Características</title>
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
        <h1 class="banner-title">Nuestroas Características</h1>
        <a href="index.php" class="banner-btn">Inicio</a>
      </div>
    </header>
    <div class="content-divider"></div>

    <?php 
    require('templates/caracteristicas.php')
   ?>

    <?php
    require('templates/footer.php');
  ?>
  </body>
</html>
