<?php 

    //Importamos el archivo donde definimos las funciones
    include '../controller/class.php';

    //Obtenemos el método con el cual se envió la petición
    switch($_SERVER['REQUEST_METHOD']){

        //Si es post se ejecuta la función saveResult
        // que guarda los resultados de la evaluación
        case 'POST':

            //Se obtiene la variable que viene por post.
            $name = $_POST['name'];
            //Se obtiene la variable que viene por post.
            $materia = $_POST['materia'];
            //Se obtiene la variable que viene por post.
            $grado = $_POST['grado'];
            //Se ejecuta la función enviando los parametros obtenidos
            $data = createClass($name,$materia,$grado);
            //Se regresa la respuesta de la función
            echo $data;
        break;

        //Si es get se ejecuta la función getResults
        //que devuelve 
        case 'GET':
            //$headers = getallheaders();
            //header('Content-Type: application/json');
            //$json = json_encode($headers);
            //$json = json_decode($json,true);
            //$userId = $json['userId'];
            //$data = getResults($json['userId']);
            $data = getClasses();
            echo $data;

            //Devuelve los resultados
            //echo $data;
        break;



    }


?>
