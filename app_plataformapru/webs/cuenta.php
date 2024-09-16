<!DOCTYPE html>
<?php
require_once '../conBd/conexion.php';
require_once '../metodo/MetodoPrincipal.php';


session_start(); // llamamos a la sesion abierta
// error_reporting(0);

// creamos una variable para session:
$var_ses = $_SESSION['nombre'];
$var_id = $_SESSION['id'];

// FALTA ENCRIPTAR ARCHIVOS.PHP
// LLAS RUTAS ENCRIPTAR
// CONTRASEÑA ENCRIPTAR
// procedimientos almacenados

// Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
$var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
$var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);


// verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
if (($var_ses == null || $var_ses == '') || ($var_id == null || $var_id == '')) {

    header("location:../index.php");
    die(); //con este die() ->detener la ejecución del código y evitar que se muestre el resto de la página.
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&family=Quicksand:wght@300;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7b9ca42581.js" crossorigin="anonymous"></script>
    <title>CUENTA</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Fondo con gradiente y una imagen de fondo opcional */
        body {
            background: linear-gradient(135deg, rgba(240, 240, 240, 0.8), rgba(255, 255, 255, 0.8)),
                        url('ruta/a/tu/imagen.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        /* Opcional: color de fondo para el contenedor principal */
        .container {
            background-color: #ffffff; /* Fondo blanco para el contenido principal */
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../imagenes/logos/logo_bota_fora.svg" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hoteles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="casas.php">Casas de Campo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playas.php">Playas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurantes.php">Restaurantes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Cuenta</a>
                </li>
                <!-- 0 -->
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="navbar-text" style="color: #C7C7C7; font-size: 17px;">
                        <?php echo $_SESSION['nombre']; ?>
                    </span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="../procesos/cerrar.php">Cerrar sesión</a></li>
            
          </ul>
        </li>
            </ul>

        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <h1>Detalles de la Cuenta</h1>
        <table class="table table-bordered table-striped">
            <tbody>
                <?php
                $obj = new usuario(); // Instancia un objeto de la clase usuario
                $sql = "SELECT id, nombre, apellido, dni, email FROM usuarios WHERE id = $var_id;"; // Crea la consulta SQL
                $datos = $obj->mostrarRegistro($sql); // Llama al método mostrarRegistro
                foreach ($datos as $key) {
                ?>
                <tr>
                    <th>ID</th>
                    <td><?php echo $key['id']; ?></td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td><?php echo $key['nombre']; ?></td>
                </tr>
                <tr>
                    <th>Apellido</th>
                    <td><?php echo $key['apellido']; ?></td>
                </tr>
                <tr>
                    <th>DNI</th>
                    <td><?php echo $key['dni']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $key['email']; ?></td>
                </tr>
                <tr>
                    <th>Clave</th>
                    <td>**********</td>
                    <td><a href="../procesos/editar.php?id=<?php echo $key['id']; ?>" class="btn btn-primary">Editar clave</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer flotante -->
    <a href="#footer" class="btn btn-light btn-flotante" style="position: fixed; bottom: 20px; right: 20px;">Idioma y Moneda</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="../interaccion/nuevoboton.js"></script>
    <script src="../interaccion/slider.js"></script>
</body>

</html>
