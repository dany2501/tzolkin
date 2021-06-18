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

    //Se obtiene la variable que viene por post.
    $tipo = $_POST['tipo'];

    //Se guarda el registro en la base de datos y en caso de error.
    //Se imprime la excepción.
    mysqli_query($conection,"insert into usuario(username,password,tipo) VALUES ('".$username."','".$password."','".$tipo."')") or die (mysqli_error($conection));
    //Si se guardó el usuario se pinta un mensaje en pantalla.
    echo "<h2>Usuario guardado</h2>";
    
    //Déspues de 5 segundos se redirige al usuario a la pantalla de login.
    header("refresh:5,url=http://localhost/tzolkin/frontend/login.php");
    die();

?>
