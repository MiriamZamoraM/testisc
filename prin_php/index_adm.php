<?php


    session_start();

    if(isset($_SESSION['usuario'])){
        //header("location: admins/info_base.php");
    }


?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_adm.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
    rel="stylesheet">
        <title>Administradores</title>
</head>
<body>
<main>
        <!--Contenedor principal-->
        <div class="contenedor_todo">
            <!--Cajas de login y registro-->
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para ingresar a la información</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion </button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Eres administrador no registrado?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Contenedor de formularios-->
            <div class="contenedor__login-register">
                <form action="phpsqladm/login_adm_be.php" method="POST" class="formulario__login"> <!--Falta action-->
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="clave">
                    <button>Entrar</button>
                </form>

                <form action="phpsqladm/registro_adm_be.php" method="POST" class="formulario__register"> <!--Falta action-->
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <!--input type="text" placeholder="Apellido"-->
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="clave">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/script_adm.js"></script>

    <div class="back_home">
        <form action="../home.php">
            <button>Home</button>
        </form>
    </div>
</body>
</html>