<?php 

    //Importamos el archivo donde definimos las funciones
    include '../controller/login.php';

    //Obtenemos el método con el cual se envió la petición
    switch($_SERVER['REQUEST_METHOD']){

        //Si es post se ejecuta la función saveResult
        // que guarda los resultados de la evaluación
        case 'POST':
            $data = login($_POST['username'],$_POST['password']);
            header('Content-Type: application/json');
            echo $data;
        break;

        //Si es get se ejecuta la función getResults
        //que devuelve 
        case 'GET':
            $data = getResults(2);
            //Devuelve los resultados
            echo $data;
        break;



    }


?>
