<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Español</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:300,400,600,800" rel="stylesheet">
<link rel="stylsheet" href="https://bootswatch.com/5/vapor/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/estilo-ahorcado.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.0.1/dist/vapor/bootstrap.css">

</head>
<body>
	<div class="main-container">

        <h1 class="titulo">Juego del ahorcado</h1>
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