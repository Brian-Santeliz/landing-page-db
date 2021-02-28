<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Platos</title>
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web/css/all.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="./js/jquery-3.5.1.min.js"></script>
  </head>

  <body>
    <?php 
    require('templates/navbar.php')
   ?>
    <header class="header">
      <div class="banner">
        <h3 class="banner-subtitle">Comida naturalmente saludable</h3>
        <h1 class="banner-title">Platos Favoritos</h1>
        <a href="index.php" class="banner-btn">Inicio</a>
      </div>
    </header>
    <div class="content-divider"></div>
    <section class="platos">
      <div class="seccion-center limpiador">
        <article class="platos-info">
          <div>
            <h3 class="seccion-subtitle">Platos</h3>
            <h2 class="seccion-title text-white">Algunos de nuestros platos</h2>
          </div>
          <p class="plato-text">
            Conoce algunos de nuestros platos preferidos por nuestros clientes.
            Nuestro misión principal es brindarte el mejor sabor y servicio.
          </p>
          <a href="nosotros.php" class="main-btn">Nosotros</a>
        </article>
        <article class="platos-inventory limpiador">
          <div class="plato">
            <img
              src="./images/postre1.jpg"
              alt="plato"
              class="plato-img"
            />
            <h3 class="plato-title">Bebidas & Vinos</h3>
            <h3 class="plato-price">$29.00</h3>
          </div>
          <div class="plato">
            <img
              src="./images/hamburger.jpg"
              alt="plato"
              class="plato-img"
            />
            <h3 class="plato-title">Hamburguesas</h3>
            <h3 class="plato-price">$12.99</h3>
          </div>
          <div class="plato">
            <img
              src="./images/cupcakes.jpg"
              alt="plato"
              class="plato-img"
            />
            <h3 class="plato-title">Cupcakes</h3>
            <h3 class="plato-price">$6.00</h3>
          </div>
          <div class="plato">
            <img
              src="./images/asparegues.jpg"
              alt="plato"
              class="plato-img"
            />
            <h3 class="plato-title">Espárragos & pescado</h3>
            <h3 class="plato-price">$15.00</h3>
          </div>
          <div class="plato">
            <img
              src="./images/manzanilla.jpeg"
              alt="plato"
              class="plato-img"
            />
            <h3 class="plato-title">Té de manzanilla</h3>
            <h3 class="plato-price">$3.00</h3>
          </div>
          <div class="plato">
            <img
              src="./images/girasol.jpeg"
              alt="plato"
              class="plato-img"
            />
            <h3 class="plato-title">Almendras & Girasol</h3>
            <h3 class="plato-price">$5.00</h3>
          </div>
        </article>
      </div>
    </section>
    <?php
    require('templates/footer.php');
  ?>
  </body>
</html>
