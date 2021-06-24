<?php 
    //Importamos el archivo con la conexión.
    // a la base de datos.
    include '../bd/conexion.php';

    function login($username,$password){
        //Abrimos la conexión y la asignamos a una variable.
        $conection = openConnection();
        //Se guarda el registro en la base de datos y en caso de error.
        //Se imprime la excepción.
        $user = mysqli_query($conection,"select * from usuario where username='".$username."' and password = '".$password."'") or die (mysqli_error($conection));
        //Se redirige al usuario a la pantalla de login.
        //header("refresh:5,url=http://localhost/tzolkin/frontend/login.php");
        //die();
        $response = mysqli_fetch_row($user);
        //Se regresan los datos del usuario.
        header('Content-Type: application/json');
        echo json_encode( $response);
    }
        
?>
