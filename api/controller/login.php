<?php 
    //Importamos el archivo con la conexión.
    // a la base de datos.
    include '../bd/conexion.php';
        //Abrimos la conexión y la asignamos a una variable.
        $conection = openConnection();
        //Se obtiene la variable que viene por post.
        $username = $_POST['username'];
        //Se obtiene la variable que viene por post.
        $password = $_POST['password'];

        //Se guarda el registro en la base de datos y en caso de error.
        //Se imprime la excepción.
        $user = mysqli_query($conection,"select * from usuario where username='".$username."' and password = '".$password."'") or die (mysqli_error($conection));
        //Se redirige al usuario a la pantalla de login.
        header("Location:http://localhost/tzolkin/frontend/index.php");
        die();
        //Se regresan los datos del usuario.
        return $row = mysqli_fetch_array($user);
?>
