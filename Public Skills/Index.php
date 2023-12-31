<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Public Skills</title>
    <link rel="shortcut icon" href="img/logotipo.png" type="image/x-icon">
</head>
<body>
    <script src="Config.js"></script>
    <header>
      <div class="logo">
          <img class="logo_index" src="img/logotipo.png" alt="Logo">
          <h4 class="h4_index">Public Skills</h4>
      </div>
      <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Explorar</a></li>
          <li><a href="Oferecerr.php">Oferecer</a></li>
      </ul>
      <div class="button_index">
          <a class="link_cadastro" href="Cadastro.html">Cadastrar</a>
          <button class="meu-botao">Login</button>
      </div>
  </header>
    <!--Carrossel-->
    <div class="carousel-container">
      <div class="carousel-slides">
        <div class="carousel-slide active">
          <img src="img/00365152.jpg" alt="Slide 1">
        </div>
        <div class="carousel-slide">
          <img src="img/apple-256261_1920.jpg" alt="Slide 2">
        </div>
        <div class="carousel-slide">
          <img src="img/bricks-2181920_1280.jpg" alt="Slide 3">
        </div>
      </div>
      <button id="prevSlide" class="carousel-control-prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button id="nextSlide" class="carousel-control-next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
</body>
</html>
