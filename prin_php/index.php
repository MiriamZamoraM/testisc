<?php


    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login y Registro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
    rel="stylesheet">
</head>
<body>
    <main>
        <!--Contenedor principal-->
        <div class="contenedor_todo">
            <!--Cajas de login y registro-->
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>&#191;Ya tienes una cuenta?</h3>
                    <p>Inicia sesi&oacute;n para ingresar a la informaci&oacute;n</p>
                    <button id="btn__iniciar-sesion">Iniciar</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>&#191;A&uacute;n no tienes una cuenta?</h3>
                    <p>Reg&iacute;strate para que puedas iniciar sesi&oacute;n</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>


            <!--Contenedor de formularios-->
            <div class="contenedor__login-register">
                <form action="phpsql/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesi&oacute;n</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contrase&ntilde;a" name="clave">
                    <button>Entrar</button>
                </form>

                <form action="phpsql/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <!--input type="text" placeholder="Apellido"-->
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contrase&ntilde;a" name="clave">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>

    <div class="back_home">
        <form action="../home.php">
            <button>Home</button>
        </form>
    </div>
</body>
</html>