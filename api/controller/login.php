<?php 
include '../bd/conexion.php';
    $conection = openConnection();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = mysqli_query($conection,"select * from usuario where username='".$username."' and password = '".$password."'") or die (mysqli_error($conection));
    header("Location: http://example.com/myOtherPage.php");
    die();
    return $row = mysqli_fetch_array($user);
?>