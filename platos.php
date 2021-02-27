<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Platos</title>
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
        <h1 class="banner-title">Platos Favoritos</h1>
        <a href="index.php" class="banner-btn">Inicio</a>
      </div>
    </header>
    <!-- seccion aparte -->
    <div class="content-divider"></div>
    <!-- products -->
    <section class="products">
      <div class="section-center clearfix">
        <!-- products info  -->
        <article class="products-info">
          <div>
            <h3 class="section-subtitle">Platos</h3>
            <h2 class="section-title text-white">Algunos de nuestros platos</h2>
          </div>
          <p class="product-text">
            Conoce algunos de nuestros platos preferidos por nuestros clientes.
            Nuestro misión principal es brindarte el mejor sabor y servicio.
          </p>
          <a href="nosotros.php" class="main-btn">Nosotros</a>
        </article>
        <!-- end of products info -->
        <!-- products inventory -->
        <article class="products-inventory clearfix">
          <!-- single product -->
          <div class="product">
            <img
              src="./images/postre1.jpg"
              alt="single product"
              class="product-img"
            />
            <h3 class="product-title">Bebidas & Vinos</h3>
            <h3 class="product-price">$29.00</h3>
          </div>
          <div class="product">
            <img
              src="./images/hamburger.jpg"
              alt="single product"
              class="product-img"
            />
            <h3 class="product-title">Hamburguesas</h3>
            <h3 class="product-price">$12.99</h3>
          </div>
          <div class="product">
            <img
              src="./images/cupcakes.jpg"
              alt="single product"
              class="product-img"
            />
            <h3 class="product-title">Cupcakes</h3>
            <h3 class="product-price">$6.00</h3>
          </div>
          <div class="product">
            <img
              src="./images/asparegues.jpg"
              alt="single product"
              class="product-img"
            />
            <h3 class="product-title">Espárragos pescado</h3>
            <h3 class="product-price">$15.00</h3>
          </div>
          <div class="product">
            <img
              src="./images/manzanilla.jpeg"
              alt="single product"
              class="product-img"
            />
            <h3 class="product-title">Té de manzanilla</h3>
            <h3 class="product-price">$3.00</h3>
          </div>
          <!--end of single product -->
          <!-- single product -->
          <div class="product">
            <img
              src="./images/girasol.jpeg"
              alt="single product"
              class="product-img"
            />
            <h3 class="product-title">Almendras & Girasol</h3>
            <h3 class="product-price">$5.00</h3>
          </div>
          <!--end of single product -->
        </article>
        <!--end of  products inventory -->
      </div>
    </section>
    <!-- end of  products -->
    <?php
    require('templates/footer.php');
  ?>