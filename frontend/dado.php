<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Matemáticas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:300,400,600,800" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/estilo-dados.css">
</head>
<body>       
	<div class="container">
		<br><br>
		<h1 class="titulo">Adivina el numero</h1> 
		<br><br>
		<div class="cara-1">
			<div class="punto"></div>
		</div>
		<div class="cara-2">
			<div class="punto"></div>
			<div class="punto"></div>
		</div>
		<div class="cara-3">
			<div class="punto"></div>
			<div class="punto"></div>
			<div class="punto"></div>
		</div>
		<div class="cara-4">
			<div class="columna">
				<div class="punto"></div>
				<div class="punto"></div>
			</div>
			<div class="columna">
				<div class="punto"></div>
				<div class="punto"></div>
			</div>
		</div>
		<div class="cara-5">
			<div class="columna">
				<div class="punto"></div>
				<div class="punto"></div>
			</div>
			<div class="punto medio"></div>
			<div class="columna">
				<div class="punto"></div>
				<div class="punto"></div>
			</div>
		</div>
		<div class="cara-6">
			<div class="columna">
				<div class="punto"></div>
				<div class="punto"></div>
				<div class="punto"></div>
			</div>
			<div class="columna">
				<div class="punto"></div>
				<div class="punto"></div>
				<div class="punto"></div>
			</div>
			<h1 id="msg-final"></h1>
		<h3 id="acierto"></h3>
		<div class="flex-row no-wrap">
			<h2 class="palabra" id="palabra"></h2>
		</div>
		<div class="flex-row" id="turnos">
			<div class="col">
				<h3>Intentos restantes: <span id="intentos">6</span></h3>
			</div>
			<div class="col">
				<button onclick="inicio()" id="reset">Elegir otra palabra</button>
				<button onclick="pista()" id="pista">Dame una pista!</button>
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
</div>
		
<script src="./js/dado.js"></script>
</body>
</html>