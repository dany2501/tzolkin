
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    <meta name="keywords" content="HTML, CSS, Cajas, Maquetado, Listas">
    <meta name="copyright" content="Tzolkin">
    <meta name="description" content="Singup de usuarios a la pagina">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid text-center mt-5">
<h1>Registro de usuario</h1>
    <form action="../api/controller/signup.php" method="POST">
        <div class="row g-3">
            <div class="col-4 mb-3 mx-auto">
                <label  class="form-label d-flex align-items-start">Usuario:</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-4 mb-3 mx-auto">
                <label class="form-label d-flex align-items-start">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
        </div>

        <div class="row-g3">
            <div class="col-4 mb-3 mx-auto">
                <select class="form-select mb-3 mx auto" name="tipo" id="tipo">
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
</div>

</body>
</html>

