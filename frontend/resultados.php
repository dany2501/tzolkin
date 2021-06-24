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
    <title>Tzolkin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <script src="./js/logout.js"></script>
</head>
    <body>
        <!-- Menú lateral -->
        <div class="side-menu">
            <h3 id="name-user">Bienvenido</h3>
            <div>
                <div class="section">
                    <span>Clases</span>
                    <a href="./classes.php" class="item">
                        <div class="icon">
                            <i class="fa fa-book-open fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Lista de clases</span>
                    </a>
                    <a href="javascript:void(0)" class="item" id="createclass">
                        <div class="icon">
                            <i class="fa fa-edit fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Crear clase</span>
                    </a>
                </div>
                <div class="section">
                    <span>Actividades</span>
                    <a href="./ahorcado.php" class="item">
                        <div class="icon">
                            <i class="fab fa-odnoklassniki fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Ahorcado</span>
                    </a>
                    <a href="./dado.php" class="item">
                        <div class="icon">
                            <i class="fa fa-dice fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Dado</span>
                    </a>
                    <a href="./resultados.php" class="item item-active">
                        <div class="icon">
                            <i class="fa fa-poll-h fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Resultados</span>
                    </a>
                </div>
                <div class="section">
                    <span>Materias</span>
                    <a href="./espanol.html" class="item">
                        <div class="icon">
                            <i class="fa fa-pencil-alt fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Español</span>
                    </a>
                    <a href="./biologia.html" class="item">
                        <div class="icon">
                            <i class="fa fa-microscope fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Biología</span>
                    </a>
                    <a href="./matematicas.html" class="item">
                        <div class="icon">
                            <i class="fa fa-divide fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Matemáticas</span>
                    </a>
                </div>
                <div class="section">
                    <span>Cuenta</span>
                    <a id="logout-btn" href="index.php" class="item">
                        <div class="icon">
                            <i class="fa fa-sign-out-alt fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Cerrar sesión</span>
                    </a>
                </div>
            </div>
        </div>
    <!-- Contenido -->
    <div class="container">
        <div class="container-content text-center">
            <!-- resultados de actividad ahorcado para español -->
            <h1 class="mt-3">Resultados ahorcado</h1>
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
        <br><br>
        <!-- resultados de actividad dado para español -->
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
                    $connection = openConnection();

                    $res=mysqli_query($connection,"select * from dado" ) or die (mysqli_error($connection));
                    

                    while ($row = mysqli_fetch_array($res)){
                ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['grade'];?></td>
                        </tr>
                <?php 
                }
                ?>
            </table>
            <!-- /resultados de actividad dado -->
        </div>
    </div>
</body>
</html>