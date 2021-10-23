<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Inicio | Hilton Garden</title>
  <script src="./js/menu.js"></script>
</head>
<body>
  <!-- Menú -->
  <header>
    <a href="./medidas.html">
      <div class="p-3 mb-2 bg-primary text-white text-decoration-underline text-center">Conoce las medidas que estamos
        tomando ante el coronavirus</div>
    </a>
    <div class="container nav-container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand site-title" href="index.html">
            <img src="./img/logo.svg" alt="Logo del sitio web" class="logo">
            Hilton Garden
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="./img/open-menu.svg" alt=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./inicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Restaurante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
            <span class="navbar-text">
              <?php echo "<h3>Bienvenido " . $_SESSION['username'] . "</h3>"; ?>
              <a href="./login/logout.php"><button class="btn btn-outline-primary">Cerrar Sesión</button></a>
            </span>
          </div>
        </div>
      </nav>
    </div>
  </header>
  
  <!-- Primera sección -->
  <main>
    <section class="bg-image">
      <div class="container">

      </div>
    </section>
    <section>
      <h2>Explora nuestros precios</h2>
    </section>
  </main>
  <footer>
    <div class="mt-10 pt-5 pb-10 footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© Hilton Garden</small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>