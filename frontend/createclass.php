<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
    <meta name="keywords" content="HTML, PHP, Listas">
    <meta name="copyright" content="Tzolkin">
    <meta name="description" content="Creación de una nueva materia en la BD">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear grupo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./js/createClass.js"></script>
        <script src="./js/logout.js"></script>
</head>
    <body>
        <!-- Menú lateral -->
        <div class="side-menu">
            <h3>Bienvenido Juan</h3>
            <div>
                <div class="section">
                    <span>Clases</span>
                    <a href="./classes.php" class="item">
                        <div class="icon">
                            <i class="fa fa-book-open fa-lg" aria-hidden="true"></i>
                        </div>
                        <span>Lista de clases</span>
                    </a>
                    <a href="javascript:void(0)" class="item item-active">
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
                    <a href="./resultados.php" class="item">
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
            <div class="container-content">
                <!-- Inicio de la tabla con datos extraidos directamente de la base de datos -->
                <h1 class="mt-2 text-center">Registro de clases</h1>
                <!-- Inicio de tabla de clases exraido directamente de la base de datos -->
                

                <table class="mt-3 table text-center">
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
                                    $class = mysqli_query($connection,"select * from materia where id='".$row['materia_id']."' ");
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
                        <!-- /Tabla --> 
                        <br>
                        <h1 class="mt-3 text-center">Crear clase</h1><br>
                <!-- formulario para creación de clases -->
                <center>
                
                        <input class="mb-3" type="text" name="name" id="name" placeholder="Grupo"><br>
                        <select class="mb-3" name="materia" id="materia">
                            <option value="0">Materia</option>
                            <?php
                        $conection = openConnection();
                        $data = mysqli_query($conection,"select * from materia") or die (mysqli_error($conection));
                        while($row = mysqli_fetch_array($data)){
                    ?>
                            <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php
                            }
                
                    ?>
                        </select><br>
                        <select class="mb-3" name="grado" id="grado">
                            <option value="0">Grado</option>
                            <?php
                        $grado = mysqli_query($conection,"select * from grado") or die (mysqli_error($conection));
                        while($row = mysqli_fetch_array($grado)){
                    ?>
                            <option value="<?php echo $row['grado']; ?>"><?php echo $row['grado']; ?></option>
                            <?php
                            }
                
                    ?>
                        </select><br>
                        <input type="button" id="submit-btn" value="Agregar clase">
                    </center>
                        <!-- /formulario -->
            </div>
        </div>
    </body>
</html>