<?php 

include '../bd/conexion.php';

function saveResult($grade,$alumnoId){

        $conection = openConnection();
        mysqli_query($conection,"insert into ahorcado(grade,alumno_id) VALUES ('".$grade."','".(int)$alumnoId."')") or die (mysqli_error($conection));
        echo true;
}

function getResults($studentId){

        $connection = openConnection();
        $results=mysqli_query($connection,"select * from ahorcado where alumno_id = '".(int)$studentId."'")or die (mysqli_error($connection));
        $row = mysqli_fetch_array($results);
        echo $row;

}


?>