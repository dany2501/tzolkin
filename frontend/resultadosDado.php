<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de resultados Dado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<h1>Resultados dado</h1>
<table border="1">
            <tr>
                <td colspan="2">Tabla de resultados</td>
            </tr>
            <tr>
                <td>Intento</td>
                <td>Calificación</td>
            </tr>

        <?php 
            
            include '../api/bd/conexion.php';
            $connection = openConnection();

            $results=mysqli_query($connection,"select * from dado where alumno_id = 2") or die (mysqli_error($connection));
            

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
    
</body>
</html>