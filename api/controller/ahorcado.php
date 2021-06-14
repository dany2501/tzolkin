<?php 

include '../bd/conexion.php';
        $conection = openConnection();
        $grade = $_POST['grade'];
        $alumno = $_POST['alumnoId'];
        echo $alumno;
        mysqli_query($conection,"insert into ahorcado(grade,alumno_id) VALUES ('".$grade."','".(int)$alumno."')") or die (mysqli_error($conection));
        echo true;


?>