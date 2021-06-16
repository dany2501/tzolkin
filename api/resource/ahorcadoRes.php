<?php 

    include '../controller/ahorcado.php';

    switch($_SERVER['REQUEST_METHOD']){

        case 'POST':
            $data = saveResult($_POST['grade'],2);
            echo $data;
        break;

        case 'GET':
            $data = getResults(2);
            echo $data;
        break;



    }


?>