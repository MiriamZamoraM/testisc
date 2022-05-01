<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $clave = hash('sha512', $clave); //Encritpa las contraseñas

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
                        and clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no registrado, por favor verifique los datos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }


?>