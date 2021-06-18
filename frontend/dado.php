
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    <meta name="keywords" content="HTML, CSS, PHP,">
    <meta name="copyright" content="Tzolkin">
    <meta name="description" content="Juego de dados">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:300,400,600,800" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo-dados.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
        <!-- Inicio del navbar de navegación con Links para las otras materias -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">

        <a class="navbar-brand" href="index.php">Tzolkin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms">
                <li class="nav-item">
                    <a class="nav-link" href="espanol.html">Espa&ntilde;ol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biologia.html">Biolog&iacute;a</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matematicas.html">Matem&aacute;ticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actividades.html">Actividades</a>
                </li>
            </ul>
        </div>
</div>
</nav>
    <!-- /nav -->
    <!-- actividad del dado -->
<div class="container text-center">
    <br><br>
    <h1>Adivina el numero</h1>
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
    <!-- /actividad del dado -->
<script src="./js/dado.js"></script>
</body>
</html>
