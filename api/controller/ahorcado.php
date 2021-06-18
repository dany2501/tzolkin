<?php 
        //Importamos el archivo con la conexión.
        // a la base de datos.
        include '../bd/conexion.php';

        //Se define la función saveResult con 2 párametros
        function saveResult($grade,$alumnoId){
                //Abrimos la conexión y la asignamos a una variable.
                $conection = openConnection();
                //Se guarda el registro en la base de datos y en caso de error.
                //Se imprime la excepción.
                mysqli_query($conection,"insert into ahorcado(grade,alumno_id) VALUES ('".$grade."','".(int)$alumnoId."')") or die (mysqli_error($conection));
                //Se regresa un booleano
                echo true;
        }

        function getResults($studentId){
                //Abrimos la conexión y la asignamos a una variable.
                $connection = openConnection();
                //Se seleccionan las clases dependiendo el id del estudiante.
                $results=mysqli_query($connection,"select * from ahorcado where alumno_id = '".(int)$studentId."'")or die (mysqli_error($connection));
                //Se obtienen los resultados del query
                $row = mysqli_fetch_array($results);
                //Se regresan los datos obtenidos
                echo $row;

        }


?>
