<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="stylelogin.css">
    <title>login</title>
</head>

<body>

    <form  method="POST" action="conexionlogin.php" name="">
  

    <div class="container">
        <div class="container__contenido">
            <div class="container__informaciones">
               
                
                <h2> Digite su email</h2>
                <input type="text" class="container__input" name="usuario">

                <h2> Digite su contraseña</h2> 
                <input type="password" class="container__input" name="password">

                <input type="submit" class="container__boton" name="login" value="Iniciar sesion">
                <div class="chute container__botones">

                    <!--<button  class="container__boton" type="submit" name="login">Iniciar sesion</button>-->
                    <button  class="container__boton" > <a href="Formulario.php">  Registrese </a></button>
                </div>
            </div>
            
        </div>
       
    </div>
    
    </form>

   

</body>

</html>