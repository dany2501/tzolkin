<?php 
include '../bd/conexion.php';
    $conection = openConnection();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];
    mysqli_query($conection,"insert into usuario(username,password,tipo) VALUES ('".$username."','".$password."','".$tipo."')") or die (mysqli_error($conection));
    echo "<h2>Usuario guardado</h2>";
    
    header("refresh:5,url=http://localhost/tzolkin/frontend/login.php");
    die();

?>