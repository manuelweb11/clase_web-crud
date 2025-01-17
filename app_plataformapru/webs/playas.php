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
<html lang="es">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,300&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b9ca42581.js" crossorigin="anonymous"></script>
    <title>Playas</title>
    <link rel="stylesheet" type="text/css" href="../css/playas.css">
</head>

<body>
    
  <!--navbar-->
  <nav>
    <div class="nav">
        <img class="extension" src="../imagenes/iconos/icon_menu.svg" alt="">
        <div class="nav_left">
            <img class="logo" src="../imagenes/logos/logo_bota_fora.svg" alt="">
            <ul class="nav_items_link">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="hoteles.php ">Hoteles</a></li>
                    <li><a href="casas.php ">Casas de Campo</a></li>
                    <li><a href="#">Playas</a></li>
                    <li><a href="restaurantes.php">Restaurantes</a></li>
                    <li><a href="cuenta.php">Cuenta</a></li>
            </ul>
            
        </div>

        <div class="nav_right">
            <ul>
                <li style="color: #C7C7C7 ; font-size: 17px;"><?php echo $_SESSION['nombre'];?></li>
                <img class="flechita" src="../imagenes/iconos/flechita.svg" alt="">
            </ul>
        </div>
    

        <div class="desktop-menu  desktop__menu--remove">
            <ul>
                <li><a href="../procesos/cerrar.php" class="asignacion">cerrar sesion</a></li>
                <hr>
            </ul>
        </div>
        
    </div>

    <div class="plo">
        <div class="mobil__menu  mobil__menu--remove">

            <ul class="mobil_items_link">
                <li class="mobil_items"><a class="mobil_link" href="/">restaurante</a></li>
                <li class="mobil_items"><a class="mobil_link" href="/">playas</a></li>
                <li class="mobil_items"><a class="mobil_link" href="/">discoteca</a></li>
            </ul>
            <ul lclass="mobil_items_link">
                <li class="mobil_items my--orde"><a class="mobil_link" href="#">my orderns</a></li>
                <li class="mobil_items my--orde"><a class="mobil_link" href="#">my accounts</a></li>
            </ul>
        
            <ul class="informacion__" style="position: absolute; bottom: 10px;">
                <li class="info"><a class="email" href="#">pepito@nalgas.com</a>
                </li>
                <li class="info"><a class="sign-out" href="#">sing out</a></li>
            </ul>
        </div>
    </div>
</nav>



    <div class="body">

        <div class="tours">
            <div class="places">
                <h2>Punta Sal
                    <br> Tumbes
                </h2><br>
                <img src="../imagenes/playas/PuntaSal.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
                <br><br><br>
            </div>
            <div class="places">
                <h2>Máncora
                    <br> Piura
                </h2><br>
                <img src="../imagenes/playas/Mancora.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
            </div>
            <div class="places">
                <h2>Playa Tuquillo
                    <br> Huarmey
                </h2><br>
                <img src="../imagenes/playas/playa trujillo.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
            </div>
            <div class="places">
                <h2>Playa Caballeros
                    <br> Punta Hermosa
                </h2><br>
                <img src="../imagenes/playas/playa caballeros.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
            </div>
        </div>
    </div>
    
    
    <div class="body2">
        
        <div class="tours">
            <div class="places">
                <h2>Playa Embajadores
                    <br> San Maria del Mar
                </h2><br>
                <img src="../imagenes/playas/playa embajadores.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
            </div>
            <div class="places">
                <h2>Wakama
                    <br> Lima
                </h2><br>
                <img src="../imagenes/playas/wakama.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
            </div>
            <div class="places">
                <h2>Playa La Mina
                    <br> Ica
                </h2><br>
                <img src="../imagenes/playas/playa la mina.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Visitar</a>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer id="footer" class="footer" >
        <div class="contenedor">
                <div class="nav-footer">
                    <h3 class="titulo-footer">MiViaje.com</h3>
                    <nav class="menu">
                        <a href="#">Empleo</a>
                        <a href="#">Prensa</a>
                        <a href="#">Politicas</a>
                        <a href="#">Ayuda</a>
                    </nav>
                </div>
    
                <div class="nav-footer">
                    <h3 class="titulo-footer">Descubre MiViaje.com</h3>
                    <nav class="menu">
                        <a href="#">Confianza y Seguridad</a>
                        <a href="#">Crédito de Viajero</a>
                        <a href="#">AirBNB Citizen</a>
                        <a href="#">Viaje de negocios</a>
        
                    </nav>
                </div>
    
                <div class="nav-footer">
                    <h3 class="titulo-footer">Hospedaje</h3>
                    <nav class="menu">
                        <a href="#">Razones para Hospedar</a>
                        <a href="#">Hospitalidad</a>
                        <a href="#">Ser un anfitrión responsable</a>
                        <a href="#">Centro de la Comunidad</a>
                    </nav>
                </div>
    
                <div class="nav-footer">
                    <div class="navegacion-imagenes">
                        <h4>visitanos en:</h4>
                        <div class="twiter">
                           <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                        </div>
                        <div class="twiter">
                           <a href="#"><i class="fa-brands fa-youtube fa-2x"></i></a>
                        </div>
                        <div class="twiter">
                           <a href="#"><i class="fa-brands fa-discord fa-2x"></i></a>
                        </div>
           
                        <div class="twiter">
                           <a href="#"><i class="fa-brands fa-github  fa-2x"></i></a>
                        </div>
                        <div class="twiter">
                           <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
                        </div>
                </div>
        </div>
    </footer>
    <a href="#footer" class="btn-flotante" style="background-color: #fff;">Idioma y Moneda</a>
    <script src="../interaccion/boton.js"></script>
</body>

</html>