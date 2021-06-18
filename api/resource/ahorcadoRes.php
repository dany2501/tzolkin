<?php 

    //Importamos el archivo donde definimos las funciones
    include '../controller/ahorcado.php';

    //Obtenemos el método con el cual se envió la petición
    switch($_SERVER['REQUEST_METHOD']){

        //Si es post se ejecuta la función saveResult
        // que guarda los resultados de la evaluación
        case 'POST':
            $data = saveResult($_POST['grade'],2);
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
