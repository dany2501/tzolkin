<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid text-center">
    <h1 class="text-center">Inicio de sesión</h1>
    <br>
    <br>
    <form action="../api/controller/login.php" method="POST">
        <div class="row g-3">
            <div class="col-4 mb-3 mx-auto">
                <label  class="form-label d-flex align-items-start">Usuario:</label>
                <input type="text" class="form-control" id="username">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-4 mb-3 mx-auto">
                <label class="form-label d-flex align-items-start">Contraseña:</label>
                <input type="password" class="form-control" id="password">
            </div>
        </div>
        <br>
        <button type="submit" id="button" class="mx-auto mb-5 btn btn-primary">Iniciar sesión</button>
    </form>

</div>
</body>
</html>
