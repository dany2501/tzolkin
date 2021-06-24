<?php 
    //Importamos el archivo con la conexión.
    // a la base de datos.
    include '../bd/conexion.php';

    function createClass($name,$materia,$grado){
        
        //Abrimos la conexión y la asignamos a una variable.
        $conection = openConnection();
        //se guarda en la base de datos
        mysqli_query($conection,"insert into clases(grupo,materia_id,profesor_id,grado_id) VALUES ('".$name."','".(int)$materia."',2,'".(int)$grado."')") or die (mysqli_error($conection));
        //Si es exitoso, regresa un verdadero.
        echo true;
    }

    function getClasses(){
        $conection = openConnection();
        //se guarda en la base de datos
        $classes = mysqli_query($conection,"select * from clases where profesor_id = 2") or die (mysqli_error($conection));
        //Si es exitoso, regresa un arreglo de objetos.
        $response = mysqli_fetch_array($classes);

        //header('Content-Type: application/json');
        return $response;
    }
?>
