<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    	<meta name="keywords" content="HTML, CSS, cajas, maquetado, listas">
    	<meta name="copyright" content="Tzolkin">
    	<meta name="description" content="Menú">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Español</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:300,400,600,800" rel="stylesheet">
<link rel="stylsheet" href="https://bootswatch.com/5/vapor/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/estilo-ahorcado.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3">
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
	<div class="container">

        <h1 id="titulo">Juego del ahorcado</h1>
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
</body>
</html>
