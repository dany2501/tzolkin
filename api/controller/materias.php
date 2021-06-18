<?php

    //Importamos el archivo donde definimos las funciones.
    include '../bd/conexion.php';

    //Funcion para obtener las clases de la base de datos.
    function getMaterias(){
        //Se abre la conexión con la base de datos y se asigna a una variable.
        $conection = openConnection();
        
        //Se ejecuta un query que obtiene todos los registros de las materias.
        //En caso de error se imprime el error.
        $data = mysqli_query($conection,"select * from materia") or die (mysqli_error($conection));

        //Si no ocurre ningún error regresa los datos.
        return $data;
    }


?>
