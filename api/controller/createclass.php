<?php 
    //Importamos el archivo con la conexión.
    // a la base de datos.
    include '../bd/conexion.php';
    //Abrimos la conexión y la asignamos a una variable.
    $conection = openConnection();
    //Se obtiene la variable que viene por post.
    $name = $_POST['name'];
    //Se obtiene la variable que viene por post.
    $materia = $_POST['materia'];
    //Se obtiene la variable que viene por post.
    $grado = $_POST['grado'];
    mysqli_query($conection,"insert into clases(grupo,materia_id,profesor_id,grado_id) VALUES ('".$name."','".(int)$materia."',2,'".(int)$grado."')") or die (mysqli_error($conection));
    echo "<h2>Clase creada</h2>";
    header("refresh:5,url=http://localhost/tzolkin/frontend/createclass.php");
    die();

?>
