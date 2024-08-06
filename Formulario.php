<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styleFormulario.css">
    <title>formulario</title>

    </head>

<body>
    
        
    


       
    <form class="contenido" action="conexionformulario.php" method="POST" name="formulario">
        <div  class="nombre">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>


        <div>   
        <label for="nombre">Apellido:</label>
            <input type="text" id="Apellido" name="apellido" required>
        </div>


        <div class="email">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div>
        <label for="usuario">crear usuario:</label>
        <input type="text"  name="usuario" required>
        </div>

        <div>
            <label for="contraseña">crear contraseña:</label>
            <input type="password"  name="password" required>
            </div>


        <div>
            <button type="submit"  name="enviar">Enviar</button>
        </div>
    </form>

    <footer class="titulo">

    <h1>   Formulario de registro </h1>
    </footer>
</body>
</html>



    