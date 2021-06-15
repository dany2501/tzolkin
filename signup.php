<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylsheet" href="https://bootswatch.com/5/vapor/bootstrap.css">
</head>
<body>

<form action="../api/controller/signup.php" method="POST">

    <input type="text" name="username" id="username" placeholder="Usuario"><br>
    <input type="text" name="password" id="password" placeholder="Contraseña"><br>
    <select name="tipo" id="tipo">
        <option value="1">Alumno</option>
        <option value="2">Profesor</option>
        <option value="3">Administrador</option>
    </select><br>
    <input type="submit" value="Registrarse">

</form>
    
</body>
</html>