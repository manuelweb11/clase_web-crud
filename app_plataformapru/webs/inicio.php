<!DOCTYPE html>
<?php 

    session_start();// llamamos a la sesion abierta
    // error_reporting(0);
    // creamos una variable para session:
    $var_ses= $_SESSION['nombre'];
    $var_id = $_SESSION['id'];

    // Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
    $var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
    $var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);

    // verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
    if(($var_ses == null || $var_ses == '')||($var_id == null || $var_id == '')){

        header("location:../index.php");
        die();//con este die() ->detener la ejecución del código y evitar que se muestre el resto de la página.
    }

?>
<html lang="es">

 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b9ca42581.js" crossorigin="anonymous"></script>
    <title>Pagina Principal</title>

    <link rel="stylesheet" type="text/css" href="../css/pag_principal.css">

    <style>
        .container {
            margin-top: 30px;
        }
        .heading h1 {
            font-size: 2.5rem;
            color: #007bff;
        }
        .heading p {
            font-size: 1.2rem;
            color: #555;
        }
        .heading a {
            font-size: 1.2rem;
            color: #007bff;
            text-decoration: none;
        }
        .heading a:hover {
            text-decoration: underline;
        }
        .places {
            text-align: center;
            margin-bottom: 30px;
        }
        .places img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>

</head>

<body>
    <!--navbar-->
    <nav>
        <div class="nav">
            <img class="extension" src="../imagenes/logos/icon_menu.svg" alt="">
            <div class="nav_left">
                <img class="logo" src="../imagenes/logos/logo_bota_fora.svg" alt="">
                <ul class="nav_items_link">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="hoteles.php ">Hoteles</a></li>
                    <li><a href="casas.php ">Casas de Campo</a></li>
                    <li><a href="playas.php ">Playas</a></li>
                    <li><a href="restaurantes.php">Restaurantes</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['nombre'];?>
                    </a>
                    <ul class="dropdown-menu">
                    <li><a href="../procesos/cerrar.php" class="asignacion">cerrar sesion</a></li>
                    </ul>
            </div>
        </div>
    
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center heading">
            <h1>Viajes Turísticos</h1>
            <p>Somos tu mejor opción si estás pensando en viajar, queremos que solo te concentres en eso, por eso tenemos muchos paquetes TODO INCLUIDO para ti.</p>
            <a href="#">Saber más</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 places">
            <h2>Paracas</h2>
            <img src="../imagenes/pasajes/paracas.png" alt="Paracas">
            <br>
            <a href="#" class="btn btn-custom mt-3">Quiero ir</a>
        </div>
        <div class="col-md-4 places">
            <h2>Machu Picchu</h2>
            <img src="../imagenes/pasajes/machu.jpg" alt="Machu Picchu">
            <br>
            <a href="#" class="btn btn-custom mt-3">Quiero ir</a>
        </div>
        <div class="col-md-4 places">
            <h2>Huacachina</h2>
            <img src="../imagenes/pasajes/huacachina.jpg" alt="Huacachina">
            <br>
            <a href="#" class="btn btn-custom mt-3">Quiero ir</a>
        </div>
    </div>
</div>
    

    <a href="#footer" class="btn-flotante" style="background-color: #fff;">Idioma y Moneda</a>
    <script src="../interaccion/boton.js"></script>
    
</body>

</html>