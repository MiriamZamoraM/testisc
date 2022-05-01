<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
        alert ("Por favor debes iniciar sesión");
        window.location = "../home.php";
        </script>
        ';
        //header("location: index.php");
        session_destroy();
        die();
    }

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_test.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
    rel="stylesheet">
    <title>Información complementaria</title>
</head>
<body>
        <div class="h_all">
            <div class="h_principal">
                <div class="h_h1">
                    <h1>Información complementaria</h1>
                </div>
            </div>
        </div>

    <p class="click"><a href="phpsql/cerrar_sesion.php">Cerrar sesión</a></p>

    <main>
        <div class="container_all">
            <div class="cont_form">
                <div class="pregunta1">
                    <!--form action="datos_conexion_be.php" method="POST"> <falta action, method>
                        <h2>Ingresa los datos solicitados por favor</h2>
                        <input type="text" placeholder="Confirma tu correo" name="correo">
                        <input type="text" placeholder="Área laboral" name="area">
                        <input type="text" placeholder="Edad" name="edad">
                        <input type="text" placeholder="Teléfono" name="tel">
                        <button> Enviar </button>
                    </form-->

                    <form action="">
                        <h3>Iniciamos</h3>
                        <h5>Pregunta 1</h5>
                        <input type="text" placeholder="Escribe tu respuesta" name="respuesta1">
                        <button>Enviar respuestas</button>
                    </form>
                </div>
            </div>
        </div>


    </main>
    

</body>
</html>