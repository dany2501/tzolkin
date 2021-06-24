<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
            <meta name="keywords" content="HTML, CSS, cajas, maquetado, listas">
            <meta name="copyright" content="Tzolkin">
            <meta name="description" content="Menú">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tzolkin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:300,400,600,800" rel="stylesheet">
    <link rel="stylsheet" href="https://bootswatch.com/5/vapor/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/estilo-ahorcado.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./css/app.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
            integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <script src="./js/logout.js"></script>
</head>
    <body>
        <!-- Menú lateral -->
        <div class="side-menu">
            <h3 id="name-user">Bienvenido</h3>
            <div>
                <div class="section">
                    <span>Clases</span>
                    <a href="./classes.php" class="item">
                        <div class="icon">
                            <i class="fa fa-book-open fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Lista de clases</span>
                    </a>
                    <a href="./createclass.php"  class="item " id="createclass">
                        <div class="icon">
                            <i class="fa fa-edit fa-lg" aria-hidden="true" ></i>
                        </div>
                        <span>Crear clase</span>
                    </a>
                </div>
                <div class="section">
                    <span>Actividades</span>
                    <a href="./ahorcado.php" class="item item-active" >
                        <div class="icon">
                            <i class="fab fa-odnoklassniki fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Ahorcado</span>
                    </a>
                    <a href="./dado.php" class="item">
                        <div class="icon">
                            <i class="fa fa-dice fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Dado</span>
                    </a>
                    <a href="./resultados.php" class="item">
                        <div class="icon">
                            <i class="fa fa-poll-h fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Resultados</span>
                    </a>
                </div>
                <div class="section">
                    <span>Materias</span>
                    <a href="./espanol.html" class="item">
                        <div class="icon">
                            <i class="fa fa-pencil-alt fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Español</span>
                    </a>
                    <a href="./biologia.html" class="item">
                        <div class="icon">
                            <i class="fa fa-microscope fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Biología</span>
                    </a>
                    <a href="./matematicas.html" class="item">
                        <div class="icon">
                            <i class="fa fa-divide fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Matemáticas</span>
                    </a>
                </div>
                <div class="section">
                    <span>Cuenta</span>
                    <a id="logout-btn" href="index.php" class="item">
                        <div class="icon">
                            <i class="fa fa-sign-out-alt fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Cerrar sesión</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Contenido -->
        <div class="container">
            <div class="container-content">
                <h1 id="titulo" class="mt-3 text-center">Juego del ahorcado</h1>
                <h1 id="msg-final"></h1>
                <h3 id="acierto"></h3>
                <div class="flex-row no-wrap">
                <h2 class="palabra" id="palabra"></h2>
                <picture>
                    <img src="./img/elahorcado0.jpg" alt="" id="image6">
                    <img src="./img/elahorcado1.jpg" alt="" id="image5">
                    <img src="./img/elahorcado2.jpg" alt="" id="image4">
                    <img src="./img/elahorcado3.jpg" alt="" id="image3">
                    <img src="./img/elahorcado4.jpg" alt="" id="image2">
                    <img src="./img/elahorcado5.jpg" alt="" id="image1">
                    <img src="./img/elahorcado6.jpg" alt="" id="image0">
                </picture>
                </div>
                <div class="flex-row" id="turnos">
                <div class="col">
                    <h3>Intentos restantes: <span id="intentos">6</span></h3>
                </div>
                <div class="col">
                    <button onclick="inicio()" id="reset">Elegir otra palabra</button>
                    <h3>Pista:</h3>
                    <span id="hueco-pista"></span>
                </div>
                </div>
                
                <div class="flex-row">
                <div class="col">
                    <div class="flex-row" id="abcdario">
                    </div>
                </div>
                <div class="col"></div>
                </div>

            </div>
            <script src="./js/ahorcado.js"></script>
            </div>
        </div>
    </body>
</html>