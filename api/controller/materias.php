<?php

include '../bd/conexion.php';

//Funcion para obtener las clases de la base de datos
function getMaterias(){
    $conection = openConnection();
    $data = mysqli_query($conection,"select * from materia") or die (mysqli_error($conection));

    return $data;
}


?>