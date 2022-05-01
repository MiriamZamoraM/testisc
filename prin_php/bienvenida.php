<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
        alert ("Por favor debes iniciar sesión");
        window.location = "index.php";
        </script>
        ';
        header("location: index.php");
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
    <link rel="stylesheet" href="../css/style_bienvenida.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
    rel="stylesheet">
    <title>Bienvenido</title>
</head>
<body>
    <div class="head_h">
        <div class="head_principal">
            <div class="h1_h">
                <h1>BIENVENIDO AL TEST</h1>
                <p><a href="phpsql/cerrar_sesion.php">Cerrar sesión</a></p>
            </div>
            
        </div>
        
    </div>
    
    
    <main>
        <div class="contenedor_prin">
            <div class="caja_principal">
                <div class="caja_frase">
                <h3>Dedícate a sentirte bien contigo mism@, es con quien pasarás el resto de tu vida</h3>
                <p>¡SUERTE!</p>
                <form action="test.php">
                    <button>Iniciar test</button>
                </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>