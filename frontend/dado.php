<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    <meta name="keywords" content="HTML, CSS, PHP,">
    <meta name="copyright" content="Tzolkin">
    <meta name="description" content="Juego de dados">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tzolkin</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:300,400,600,800" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo-dados.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/logout.js"></script>

</head>
    <body>
        <!-- Menú lateral -->
        <div class="side-menu">
            <h3>Bienvenido Juan</h3>
            <div>
                <div class="section">
                    <span>Clases</span>
                    <a href="./classes.php" class="item">
                        <div class="icon">
                            <i class="fa fa-book-open fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Lista de clases</span>
                    </a>
                    <a href="./createclass.php" class="item">
                        <div class="icon">
                            <i class="fa fa-edit fa-lg" aria-hidden="true" id="createclass"></i>
                        </div>
                        <span>Crear clase</span>
                    </a>
                </div>
                <div class="section">
                    <span>Actividades</span>
                    <a href="./ahorcado.php" class="item">
                        <div class="icon">
                            <i class="fab fa-odnoklassniki fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Ahorcado</span>
                    </a>
                    <a href="javascript:void(0)" class="item item-active">
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
                    <a id="logout-btn"href="index.php" class="item">
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
            <div class="container-content text-center">
                <h1 class="mt-3">Adivina el numero</h1>
                <h1 id="msg-final"></h1>
                <h3 id="acierto"></h3>
                <h2 class="palabra" id="palabra"></h2>

                <div class="flex-row" id="turnos">
                    <div class="col">
                        <h3>Intentos restantes: <span id="intentos">6</span></h3>
                    </div>
                    <div class="col">
                        <button class="mb-3" onclick="inicio()" id="reset">Elegir otra palabra</button>
                        <br>Pista: <span id="hueco-pista"></span>
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
        </div>
        <script src="./js/dado.js"></script>
    </body>
</html>