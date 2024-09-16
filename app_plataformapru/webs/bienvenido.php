<!DOCTYPE html>
<?php 

    session_start();// llamamos a la sesion abierta
    // error_reporting(0);

    // creamos una variable para session:
    $var_ses= $_SESSION['nombre'];
    $var_id = $_SESSION['id'];

// FALTA ENCRIPTAR ARCHIVOS.PHP
// LLAS RUTAS ENCRIPTAR
// CONTRASEÑA ENCRIPTAR
// procedimientos almacenados

    // Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
    $var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
    $var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);

    
    // verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
    if(($var_ses == null || $var_ses == '')||($var_id == null || $var_id == '')){

        header("location:../index.php");
        die();//con este die() ->detener la ejecución del código y evitar que se muestre el resto de la página.
    }

?>

<!-- <html>
<head>
	<meta charset="UTF-8">
	<title>Bienvenido/a</title>
	<link rel="stylesheet" href="../css/bienvenido.css">
</head>
<body>
	<header>
		<h1>Bienvenido/a usuario/<?php echo $_SESSION['nombre'];?></h1>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="cuenta.php">CUENTA</a></li>
				<li><a href="../procesos/cerrar.php">CERRAR</a></li>
				<li><a href="#">Galería</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Reservas</a></li>
				<li><a href="#">Ofertas</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="cards">
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 1">
				<h2>Lugar turístico 1</h2>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 2">
				<h2>Lugar turístico 2</h2>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 3">
				<h2>Lugar turístico 3</h2>
			</div>
			<div class="card">
				<img src="https://via.placeholder.com/300x200" alt="Imagen 4">
				<h2>Lugar turístico 4</h2>
			</div>
		</section>
		<section class="text-image">
			<p>Perú es un país lleno de lugares turísticos espectaculares, desde la costa hasta la sierra y la selva. En sus paisajes podemos encontrar una gran diversidad de culturas, historia, gastronomía, aventura y mucha diversión. ¡Ven y disfruta de todo lo que Perú tiene para ofrecer!</p>
			<img src="https://via.placeholder.com/300x200" alt="Imagen de Perú">
		</section>
	</main>
	<footer>
		<p>Derechos reservados 2023 &copy; Mi Empresa S.A.C.</p>
	</footer>
</body>
</html> -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido/a</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos personalizados */
    header h1 {
      font-size: 2rem;
      color: #fff;
      margin: 0;
      text-align: center;
      background-color: #007bff;
      padding: 1rem 0;
    }
    
    nav ul {
      list-style-type: none;
      padding: 0;
      text-align: center;
      background-color: #343a40;
    }

    nav ul li {
      display: inline-block;
      margin: 0 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 1.1rem;
    }

    nav ul li a:hover {
      color: #ffc107;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 2rem;
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .text-image {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin-top: 2rem;
    }

    .text-image p {
      font-size: 1.2rem;
    }

    .text-image img {
      width: 100%;
      max-width: 400px;
      margin-top: 1rem;
    }

    footer {
      text-align: center;
      padding: 1rem 0;
      background-color: #343a40;
      color: #fff;
      margin-top: 3rem;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="bg-primary text-white py-3">
    <div class="container">
      <h1>Bienvenido/a usuario/<?php echo $_SESSION['nombre'];?></h1>
    </div>
  </header>

  <!-- Navbar -->
  <nav class="bg-dark">
    <div class="container">
      <ul class="nav justify-content-center py-3">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="cuenta.php">Cuenta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../procesos/cerrar.php">Cerrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Reservas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Ofertas</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container my-5">
    <section class="cards row">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title">Lugar turístico 1</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 2">
          <div class="card-body">
            <h5 class="card-title">Lugar turístico 2</h5>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Lugar turístico 3</h5>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen 4">
          <div class="card-body">
            <h5 class="card-title">Lugar turístico 4</h5>
          </div>
        </div>
      </div>
    </section>

    <!-- Text with Image Section -->
    <section class="text-image text-center">
      <p>Perú es un país lleno de lugares turísticos espectaculares, desde la costa hasta la sierra y la selva. En sus paisajes podemos encontrar una gran diversidad de culturas, historia, gastronomía, aventura y mucha diversión. ¡Ven y disfruta de todo lo que Perú tiene para ofrecer!</p>
      <img src="https://via.placeholder.com/400x300" alt="Imagen de Perú" class="img-fluid mt-4">
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white py-3">
    <div class="container">
      <p>Derechos reservados 2023 &copy; Mi Empresa S.A.C.</p>
    </div>
  </footer>

  <!-- Bootstrap JS (Opcional si necesitas interactividad) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
