<?php 

    include '../bd/conexion.php';
    $conection = openConnection();
    $name = $_POST['name'];
    $materia = $_POST['materia'];
    $grado = $_POST['grado'];
    mysqli_query($conection,"insert into clases(grupo,materia_id,profesor_id,grado_id) VALUES ('".$name."','".(int)$materia."',2,'".(int)$grado."')") or die (mysqli_error($conection));
    echo "<h2>Clase creada</h2>";
    header("refresh:5,url=http://localhost/tzolkin/frontend/createclass.php");
    die();

?>