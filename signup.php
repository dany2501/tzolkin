<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.css">
</head>
<body>
    <h1>Registro de usuario</h1>
<form action="../api/controller/signup.php" method="POST">
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
    <div class="row-g3">
        <div class="col-4 mb-3 mx-auto">
            <select class="form-select mb-3 mx-auto" name="tipo" id="tipo">
                <option value="1">Alumno</option>
                <option value="2">Profesor</option>
                <option value="3">Administrador</option>
            </select>
        </div>
    </div>
<br>
    <br>
    <button type="submit" class="mx-auto mb-5 btn btn-primary ">Registrarse</button>
</form>
</body>
</html>
