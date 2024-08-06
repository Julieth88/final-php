<?php

    include("conexion.php");

    /*if (isset($_POST['login'])) {
        $login_correo = $_POST['usuario'];
        $login_contraseña = $_POST['contraseña'];

        $query = "SELECT * FROM registro WHERE email
        = '$login_correo'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);

            if ($query = "SELECT * FROM registro WHERE contrasena = '$login_contraseña'") {

            // if (password_verify($login_contraseña, $fila['contraseña'])) {
                echo "¡Inicio de sesión exitoso!";

                include('inicio.php');

                
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "No existe una cuenta con ese correo.";
        }

        
    }*/


    

    if (isset($_POST['login'])) {
        $login_correo = $_POST['usuario'];
        $login_password = $_POST['password'];

        // Usar consultas preparadas para evitar inyecciones SQL
        $query = "SELECT password FROM registro WHERE email = ?";
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "s", $login_correo);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $stored_password);
            mysqli_stmt_fetch($stmt);

            // Comparar la contraseña proporcionada con la almacenada
            if ($login_password === $stored_password) {

               header('location:inicio.php');

            } 
                
        } else {
            echo "No existe una cuenta con ese correo.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    }
?>
