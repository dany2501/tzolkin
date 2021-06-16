<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear grupo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">

        <a class="navbar-brand" href="index.php">Tzolkin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms">
                <li class="nav-item">
                    <a class="nav-link" href="espanol.html">Espa&ntilde;ol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biologia.html">Biolog&iacute;a</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matematicas.html">Matem&aacute;ticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actividades.html">Actividades</a>
                </li>
            </ul>
        </div>
</div>
</nav>
<div class="container text-center mt-5">
    <h1>Registro de Clases</h1>
    <table  class="mt-4 table">

    <table border="1">
        <tr>
            <td class="table-success mt-1" colspan="4">Tabla de materias</td>
        </tr>
        <tr class="table-primary" >
            <td>Id</td>
            <td>Grupo</td>
            <td>Profesor</td>
            <td>Materia</td>
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
                    $class = mysqli_query($connection,"select * from materia where id='".$row['id']."' ");
                    while($materia = mysqli_fetch_array($class)){
                ?>
                    <td><?php echo $materia['nombre'];?></td>
                <?php
                }
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
                        $class = mysqli_query($connection,"select * from materia where id='".$row['id']."' ");
                        while($materia = mysqli_fetch_array($class)){
                    ?>
            <td><?php echo $materia['nombre'];?></td>
            <?php
                    }
                    ?>
        </tr>
        <?php
            }
        ?>
    </table><br>

    <form action="../api/controller/createclass.php" method="POST">

        <input class="mb-3" type="text" name="name" id="name" placeholder="Nombre de la clase"><br>
        <select class="mb-3" name="materia" id="materia">
            <option value="0">Seleccionar</option>
            <?php
        $conection = openConnection();
        $data = mysqli_query($conection,"select * from materia") or die (mysqli_error($conection));
        while($row = mysqli_fetch_array($data)){
            echo $row['nombre']
    ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
            <?php
            }

    ?>
        </select><br>
        <select class="mb-3" name="grado" id="grado">
            <option value="0">Seleccionar</option>
            <?php
        $grado = mysqli_query($conection,"select * from grado") or die (mysqli_error($conection));
        while($row = mysqli_fetch_array($grado)){
    ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['grado']; ?></option>
            <?php
            }

    ?>
        </select><br>
        <input type="submit" value="Agregar clase">

    </form>
</div>
</body>
</html>