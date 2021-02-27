<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mundo Natural || Inicio</title>
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web/css/all.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <!-- SECCION APARTE -->
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
        <li><a href="index.html" class="nav-link">Inicio</a></li>
        <li>
          <a href="caracteristicas.html" class="nav-link">Características</a>
        </li>
        <li><a href="nosotros.html" class="nav-link">Nosotros</a></li>
        <li><a href="platos.html" class="nav-link">Platos</a></li>
      </ul>
    </nav>
    <!-- seccion aparte -->
    <header class="header">
      <div class="banner">
        <h3 class="banner-subtitle">Comida naturalmente saludable</h3>
        <h1 class="banner-title">Restaurante Artesenal</h1>
        <a href="caracteristicas.html" class="banner-btn">saber más</a>
      </div>
    </header>
    <!-- seccion aparte -->

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
    <section class="about">
      <div class="section-center clearfix">
        <article class="about-img">
          <div class="about-picture-container">
            <img
              src="./images/vegetales.jpg"
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
            conservantes y químicos
          </p>
          <a href="nosotros.html" class="main-btn">Nosotros</a>
        </article>
      </div>
    </section>
    <section class="products">
      <div class="section-center clearfix">
        <article class="products-info">
          <div>
            <h3 class="section-subtitle">Platos</h3>
            <h2 class="section-title text-white">Algunos de nuestros platos</h2>
          </div>
          <p class="product-text">
            Conoce algunos de nuestros platos preferidos por nuestros clientes.
            Nuestro misión principal es brindarte el mejor sabor y servicio.
          </p>
          <a href="platos.html" class="main-btn">Ver más</a>
        </article>
        <article class="products-inventory clearfix">
          <div class="product">
            <img
              src="./images/bebidas.jpg"
              alt="producto"
              class="product-img"
            />
            <h3 class="product-title">Bebidas & Vinos</h3>
            <h3 class="product-price">$40.00</h3>
          </div>
          <div class="product">
            <img src="./images/harina.jpg" alt="producto" class="product-img" />
            <h3 class="product-title">Pasta fresca al huevo</h3>
            <h3 class="product-price">$15.00</h3>
          </div>
          <div class="product">
            <img src="./images/postre.jpg" alt="producto" class="product-img" />
            <h3 class="product-title">Comidas Exóticas</h3>
            <h3 class="product-price">$10.99</h3>
          </div>
        </article>
      </div>
    </section>
    <section class="contact">
      <div class="section-center clearfix">
        <article class="contact-info">
          <div class="contact-item">
            <h3 class="contact-title">
              <span class="contact-icon">
                <i class="fas fa-location-arrow"></i> </span
              >Dirección
            </h3>
            <h3 class="contact-text">
              Av. Principal de Los Naranjos, C.C. Galerías.
            </h3>
          </div>
          <div class="contact-item">
            <h3 class="contact-title">
              <span class="contact-icon"> <i class="fas fa-envelope"></i> </span
              >email
            </h3>
            <h3 class="contact-text">contacto@mundonatural.com</h3>
          </div>
          <div class="contact-item">
            <h3 class="contact-title">
              <span class="contact-icon">
                <i class="fas fa-location-arrow"></i> </span
              >Teléfono
            </h3>
            <h3 class="contact-text">+58 424 456 812</h3>
          </div>
        </article>
        <article class="contact-form">
          <form action="ruta.php" method="POST" class="form-group">
            <input
              type="text"
              name="nombre"
              placeholder="nombre"
              class="form-control"
            />
            <input
              type="email"
              name="email"
              placeholder="email"
              class="form-control"
            />
            <textarea
              name="mensaje"
              placeholder="mensaje"
              class="form-control"
              rows="5"
            ></textarea>
            <button class="main-btn">Enviar</button>
          </form>
        </article>
      </div>
    </section>
<?php
  require('templates/footer.php');
?>