<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar al diccionario </title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../VIEW/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <header>
        <div class="caja">
            <h1><img src="../IMAGES/logo.png"></h1>
            <nav>
                <ul>
                    <li><a href="../index.php" >Home</a></li>
                    <li><a href="../MODEL/diccionario.php" >Diccionario</a></li>
                    <li><a href="../MODEL/login.html" >NuevasPalabras</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <a href="../CONTROLLER/logout.php" class="cerrarlog">Cerrar sesion</a>
    <?php 
        require '../BO/conexion.php';
        $sql="SELECT * FROM traduccion";
        $resultado=mysqli_query($conexion,$sql);
    ?>
    <h2 class="tituloPrincipal">Bienvenido a registro de palabras k'iche trD </h2>
    
    <a href="../MODEL/agregar.html" class="nueva" >Nueva Palabra</a>
    <a href="../MODEL/editar.html" class="edit" >Editar Palabra</a>
    <a href="../MODEL/eliminar.html" class="elim" >Eliminar Palabra</a><br>

    <table>
    
            <tr>
                <th>id</th>
                <th>Es-Español</th>
                <th>EN-Us-Ingles</th>
                <th>k'iche</th>
                <th>Pronunciacion-Es</th>
                <th>Pronunciacion-En-Us</th>
                <th>Pronunciacion-k'iche</th>
                <th>Significado</th>
                <th>Ejemplo-Es</th>
                <th>Ejemplo-En-US</th>
                <th>Ejemplo-K'iche</th>
                <th>Fecha</th>
                
            </tr>
            <?php
                include("../CONTROLLER/lista.php");
            ?> 
    </table>
   
    <footer>
        <img src="../IMAGES/logo.png">
        <p class="copyright">&copy Copyright K'iche trD - 2023</p>
    </footer>
</body>
</html>