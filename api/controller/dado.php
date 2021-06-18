<?php 
        //Importamos el archivo con la conexión.
        // a la base de datos.
        include '../bd/conexion.php';
        //Abrimos la conexión y la asignamos a una variable.
        $conection = openConnection();
        //Se obtiene la variable que viene por post.
        $grade = $_POST['grade'];
        //Se obtiene la variable que viene por post.
        $alumno = $_POST['alumnoId'];
        //Se guarda el registro en la base de datos y en caso de error.
        //Se imprime la excepción.
        mysqli_query($conection,"insert into dado(grade,alumno_id) VALUES ('".$grade."','".(int)$alumno."')") or die (mysqli_error($conection));
        //Si se guardó el registro se regresa un booleano.
        echo true;


?>
