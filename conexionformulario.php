
<?php

include("conexion.php");

#if (!$conexion) {
       # die("Conexión fallida: " . mysqli_connect_error());
    #}


     // Registro de usuario
  /*if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];
    

    $insertar = "INSERT INTO registro (`nombre`,` apellido`, `email`, `usuario`, `contraseña`) VALUES ('$nombre', '$apellido', '$email', '$usuario', '$contrasena')";

    if (mysqli_query($conexion, $insertar)) {
        echo "";

        include('paginalogin.php');
       
    } else {
        echo "Error: " . mysqli_error($conexion);
        echo "No hay registro";
    }
}*/



    include("conexion.php");

    // Registro de usuario
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $password =($_POST['password']); 

        $insertar = "INSERT INTO registro (`nombre`, `apellido`, `email`, `usuario`, `password`) VALUES ('$nombre', '$apellido', '$email', '$usuario','$password')";

        if (mysqli_query($conexion, $insertar)) {

           include('paginalogin.php');
        
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    }
?>