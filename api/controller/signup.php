<?php 

//Importamos el archivo con la conexión.
// a la base de datos.
include '../bd/conexion.php';

    function signUp($username,$password,$tipo){

        //Abrimos la conexión y la asignamos a una variable.
        $conection = openConnection();

        //Se guarda el registro en la base de datos y en caso de error.
        //Se imprime la excepción.
        mysqli_query($conection,"insert into usuario(username,password,tipo) VALUES ('".$username."','".$password."','".$tipo."')") or die (mysqli_error($conection));
        //Si se guardó el usuario se regresa el mensaje de exito.
        echo "true";

    }

?>
