<?php
    session_start();

    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['password'] ?? '';

    if($usuario === 'admin' && $clave === '1234') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['password'] = $clave;
        $_SESSION['recordar'] = $recordar;

        if(isset($_POST['recordar'])) {
            setcookie('usuario', $usuario, time() + 3600);
            setcookie('password', $clave, time() + 3600);
            setcookie('recordar', $recordar, time() + 3600);
        } 
        header('Location: bienvenida.php');
        exit;
    } else {
        echo "Contraseña o usuario incorrecto.";
        echo "<br><a href='index.php'>Volver</a>";
    }
?>