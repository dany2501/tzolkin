<?php 

    //Importamos el archivo donde definimos las funciones
    include '../controller/signup.php';

    //Obtenemos el método con el cual se envió la petición
    switch($_SERVER['REQUEST_METHOD']){

        //Si es post se ejecuta la función saveResult
        // que guarda los resultados de la evaluación
        case 'POST':
            //Se obtiene la variable que viene por post.
            $username = $_POST['username'];

            //Se obtiene la variable que viene por post.
            $password = $_POST['password'];

            //Se obtiene la variable que viene por post.
            $tipo = $_POST['tipo'];

            $data = signUp($username,$password,$tipo);
            header('Content-Type: application/json');
            echo $data;
        break;



    }


?>
