
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    <meta name="keywords" content="HTML, CSS, PHP, DAta Base, MySQL">
    <meta name="copyright" content="Tzolkin">
    <meta name="description" content="Administración de clases mediante base de datos">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
        <!-- Inicio del navbar de navegación con Links para las materias -->
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
    <!-- /nav --> 
    <!-- Inicio de la tabla con datos extraidos directamente de la base de datos -->
<div class="container text-center mt-5">
    <h1 class="mt-3">Lista de alumnos</h1>
    <table class="mt-4 table">
        <tr class="table-success mt-1">
            <td colspan="5">Alumnos</td>
        </tr>
        <tr class="table-primary">
            <td>Id</td>
            <td>Usuario</td>
            <td>Tipo</td>
        </tr>

        <?php
        include '../api/bd/conexion.php';
        $connection = openConnection();

        $response = mysqli_query($connection,'select * from usuarios');

        while($row = mysqli_fetch_array($response)){
            echo($row['id']);
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['tipo'];?></td>
        </tr>
        <?php
        }
    ?>
    </table>
    <!-- /tabla -->
</div>
</body>
</html>
