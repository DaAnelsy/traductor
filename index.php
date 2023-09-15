<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="VIEW/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

</head>
<body>
    <header>
        <div class="caja">
            <h1><img src="IMAGES/logo.png"></h1>
            <nav>
                <ul>
                    <li><a href="../index.php" >Home</a></li>
                    <li><a href="MODEL/diccionario.php" >Diccionario</a></li>
                    <li><a href="MODEL/login.html" >NuevasPalabras</a></li>

                </ul>
            </nav>
        </div>
    </header>
   
    <h2 class="tituloPrincipal">Traductor</h2>
   
    <section class="principal">
    
    <div class="container">
        <div class="wrapper">
            <div class="text-input">
                <textarea class="from-text" placeholder="Ingrese el Texto"></textarea>
                <textarea class="to-text" placeholder="Traduccion" readonly disabled ></textarea>
            </div>
            <ul class="controls">
                <li class="row from">
                    <div class="icons">
                        <i id="from" class="fas fa-volume-up"></i>
                        <i id="from" class="fas fa-copy"></i>
                    </div>
                    <select>
                        
                    </select>
                </li>
                <li class="exchange"><i class="fas fa-exchange-alt"></i></li>
                <li class="row to">
                    <div class="icons">
                        <i id="to" class="fas fa-volume-up"></i>
                        <i id="to" class="fas fa-copy"></i>
                    </div>
                    <select>
                    </select>
                </li>
            </ul>
        </div>
        <button>Traducir</button>
    </div>
    </section>

    <script src="CONTROLLER/idioma.js"></script> 
    <script src="CONTROLLER/selector.js"></script>
    
    <footer>
        <img src="IMAGES/logo.png">
        <p class="copyright">&copy Copyright K'iche trD - 2023</p>
    </footer>

</body>
</html>