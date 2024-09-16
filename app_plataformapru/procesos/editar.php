<?php 
	require_once '../conBd/conexion.php';

    session_start();
    // error_reporting(0);

    // creamos una variable para session:
    $var_ses= $_SESSION['nombre'];
    $var_id=$_SESSION['id'];

	 // Aquí aplicamos la limpieza y filtrado de datos en las variables de sesión recuperadas
	 $var_ses = filter_var($var_ses, FILTER_SANITIZE_STRING);
	 $var_id = filter_var($var_id, FILTER_SANITIZE_NUMBER_INT);
   
	// verifica si las dos variables, $var_ses y $var_id, son nulas o están vacías.
    if(($var_ses == null || $var_ses == '')||($var_id == null || $var_id == '')){
        header("location:../index.php");
        die();//con este die() se corta todo se detiene la ejecucion 
    }
// Se recibe el parámetro GET "id"enviado desde cuenta.php  del index  
	$id=$_GET['id'];

	$obj= new conectar();//crea un objeto de la clase conectar
	$conexion=$obj->conexion();//Objeto accede al metodo conexion() que contiene la conexion a base de datos
	
	$sql="SELECT * from usuarios where id='$id'";
			// mysql_query ->ejecuta la consulta y devuelve un booleano si la ejecucion fue exitosa o no
            // Toma dos parámetros: la conexión a la base de datos y la consulta SQL que se desea ejecutar. se guarda en $result
	$result=mysqli_query($conexion,$sql);
	//  mysqli_fetch_row() => fila de resultados como un array numérico y se guarda en la variable $ver.
	$ver=mysqli_fetch_row($result);

 ?>
 
 <!DOCTYPE html>
<html>
<head>
    <title>Actualizar Datos</title>
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 30px;
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

<div class="container">
    <form action="../procesos/actualizar.php" method="post">
        <!-- Campo de entrada oculto en form asignando el valor $id del Get -->
        <input type="hidden" value="<?php echo $id ?>" name="id">

        <div class="form-group">
            <label for="txtnombre">Nombre</label>
            <input type="text" class="form-control" id="txtnombre" name="txtnombre" value="<?php echo $ver[1]; ?>">
        </div>
        
        <div class="form-group">
            <label for="txtapellido">Apellido</label>
            <input type="text" class="form-control" id="txtapellido" name="txtapellido" value="<?php echo $ver[2]; ?>">
        </div>
        
        <div class="form-group">
            <label for="txtdni">DNI</label>
            <input type="text" class="form-control" id="txtdni" name="txtdni" value="<?php echo $ver[3]; ?>">
        </div>
        
        <div class="form-group">
            <label for="txtemail">Email</label>
            <input type="email" class="form-control" id="txtemail" name="txtemail" value="<?php echo $ver[4]; ?>">
        </div>
        
        <div class="form-group">
            <label for="txtclave">Clave</label>
            <input type="password" class="form-control" id="txtclave" name="txtclave" value="<?php echo $ver[5]; ?>">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-custom">Actualizar Clave</button>
        </div>
    </form>
</div>

<!-- Agrega el enlace a Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
