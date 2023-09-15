<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../VIEW/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

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
    <audio id="sound"></audio>
    <section class="principal" >
        <div class="container" >
            <div class="search-box" >
                <input type="text" placeholder="Escriba la palabra aca.." id="inp-word" />
                <button id="search-btn">Buscar</button>
            </div>
        
             <div class="result" id="result" >
           
            </div>

        </div>
    </section>

    <script src="../CONTROLLER/diccionario.js"></script>

    <footer>
        <img src="../IMAGES/logo.png">
        <p class="copyright">&copy Copyright K'iche trD - 2023</p>
    </footer>

</body>
</html>