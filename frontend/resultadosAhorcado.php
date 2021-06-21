<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    <meta name="keywords" content="HTML, CSS, Maquetado, MySQL, PHP">
    <meta name="copyright" content="Tzolkin">
    <meta name="description" content="Contiene los resultados del juego de ahorcado">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
    <!-- resultados de actividad ahorcado para español -->
<h1>Resultados ahorcado</h1>
    <table border="1">
            <tr>
                <td colspan="2">Tabla de resultados</td>
            </tr>
            <tr>
                <td>Id</td>
                <td>Calificación</td>
            </tr>

        <?php 
            
            include '../api/bd/conexion.php';
            $connection = openConnection();

            $results=mysqli_query($connection,"select * from ahorcado") or die (mysqli_error($connection));
            

            while ($row = mysqli_fetch_array($results)){
        ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['grade'];?></td>
                </tr>
        <?php 
           }
        ?>
    </table>
    <!-- /resultados de actividad ahorcado -->
</body>
</html>
