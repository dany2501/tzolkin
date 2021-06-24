<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author"
            content="Flores López Luis Divier, Hernández Cárdenas Daniel, González Portilla Daniel Iram,Vera Avelino Oscar">
        <meta name="keywords" content="HTML, CSS, Cajas, Maquetado, Listas">
        <meta name="copyright" content="Tzolkin">
        <meta name="description" content="Contenido de biología">
        <meta name="robots" content="index">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tzolkin</title>
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">-->

        <link rel="stylesheet" type="text/css" href="./css/app.css">
        <link rel="stylesheet" type="text/css" href="./css/index.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
            integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./js/index.js"></script>
        <script src="./js/login.js"></script>
        <script src="./js/signup.js"></script>
    </head>

    <body>
        <!-- Header -->
        <header class="fixed inset-x-0">
            <div class="flex flex-row justify-between items-center h-14 p-3 w-11/12 m-auto">
                <img src="./img/tzolkin.png" class="h-full" alt="Tzolkin">
                <div id="menu" class="text-2xl cursor-pointer">
                    <span class="mr-2">Menú</span>
                    <span class="font-bold text-green-600"> &#9776;</span>
                </div>
            </div>
        </header>
        <!-- Sidenav -->
        <nav id="sidenav" class="fixed bg-white bg-opacity-90 z-10 h-full w-0 top-0 right-0 duration-200 pt-2 overflow-hidden">
            <span class="absolute cursor-pointer right-7 text-4xl text-green-600" id="close-btn">&times;</span>
            <div id="sidenav-content" >
                <!-- Login -->
                <div class='px-10 mt-10 overflow-hidden' id="login">
                    <h3 class="text-xl">Iniciar Sesión</h3>
                        <div class='form-group'>
                            <label for="login-user">Usuario</label>
                            <input type='text' id='login-user' name='login-user' placeholder='Usuario'>
                            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class='form-group'>
                            <label for="login-password">Contraseña</label>
                            <input type='password' id='login-password' name='login-password' placeholder='Contraseña'>
                            <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class='form-group mt-4'>
                            <input type='button' class='' id='login-btn' name='login-btn' value='Iniciar Sesión'>
                        </div>
                </div>
                <div style='height: 2px;' class="mx-5 mt-5 bg-gray-300"></div>
                <!-- signup -->
                <div class='px-10 mt-5 overflow-hidden' id="signup">
                    <h3 class="text-xl">Registro</h3>
                        <div class='form-group'>
                            <label for="signup-user">Usuario</label>
                            <input type='text' id='signup-user' name='signup-user' placeholder='Usuario'>
                            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class='form-group'>
                            <label for="signup-password">Contraseña</label>
                            <input type='password' id='signup-password' name='signup-password' placeholder='Contraseña'>
                            <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class='form-group'>
                            <label for="signup-select">Tipo de usuario</label>
                            <select id="signup-select" name="signup-select">
                                <option value="1" selected>Alumno</option>
                                <option value="2">Profesor</option>
                                <option value="3">Administrador</option>
                            </select>
                        </div>
                        <div class='form-group mt-4'>
                            <input type='button' class='' id='signup-btn' name='signup-btn' value='Registrarse'>
                        </div>
                </div>
                <div class='form-group mt-4'>
                            <input type='button' class='' id='logout-btn' name='logout-btn' value='Cerrar Sesión'>
                </div>
            </div>
        </nav>
        <div class="bg">
            <div class="container m-auto h-full flex flex-col justify-center">
                <div class="w-2/5">
                    <h1 class="font-bold text-4xl text-green-600">Interactúa, practica, aprende.</h1>
                    <p class="text-2xl mt-2">
                        Tzolkin es un sistema web que permite a los profesores y alumnos tener
                        herramientas extras de aprendizaje para llevar la educación al siguiente nivel.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>