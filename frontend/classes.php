<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clases</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>

    <table border="1">

    <tr>
        <td colspan="5">Tabla de materias</td>
    </tr>
    <tr>
        <td>Id</td>
        <td>Grupo</td>
        <td>Profesor</td>
        <td>Materia</td>
        <td>Recursos</td>
    </tr>

    <?php 
        include '../api/bd/conexion.php';
        $connection = openConnection();

        $response = mysqli_query($connection,'select * from clases');

        while($row = mysqli_fetch_array($response)){
            

            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['grupo'];?></td>
                <?php
                    $teacher = mysqli_query($connection,"select * from usuario where id='".$row['profesor_id']."' ");
                    while($prof = mysqli_fetch_array($teacher)){
                ?>
                    <td><?php echo $prof['username'];?></td>
                <?php
                }
                    $class = mysqli_query($connection,"select * from materia where id='".$row['materia_id']."' ");
                    while($materia = mysqli_fetch_array($class)){
                        switch ($materia['nombre']){
                            case "Español":
                                $ref = 'espanol.html';
                            break;
                            case "Matematicas":
                                $ref = 'matematicas.html';
                            break;
                            case "Biología":
                                $ref = 'biologia.html';
                            break;
                        }
                ?>
                    <td><?php echo $materia['nombre'];?></td>
                    <td><a href="<?php echo $ref; ?>">Visitar</a></td>
                <?php
                }
                 ?>
            </tr>
    <?php   
        }
    ?>
    </table>
    
</body>
</html>