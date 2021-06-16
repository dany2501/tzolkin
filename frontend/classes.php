
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
    <h1 class="mt-3">Lista de Clases</h1>
    <table class="mt-4 table">
        <tr class="table-success mt-1">
            <td colspan="4">Tabla de materias</td>
        </tr>
        <tr class="table-primary">
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
        </tr>
        <?php
        }
    ?>
    </table>
</div>
</body>
</html>
