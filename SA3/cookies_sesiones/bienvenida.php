<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
        exit;
    }

    $usuario = $_SESSION['usuario'];
    $recordar = $_COOKIE['recordar'] ?? '';

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pagina de Bienvenida</title>
</head>

<body>
<h2>Bienvenido, <?= htmlspecialchars($usuario) ?></h1>

    <?php if ($recordar): ?>
        <p>Te recordamos de la última vez que iniciaste sesión como <strong> <?php echo htmlspecialchars($usuario); ?> <?php endif; ?> </strong></p> 
        <p>Esta es tu sesión activa. Puedes navegar sin volver a iniciar sesión.</p>
        <a href="logout.php"> Cerrar sesión</a>
</body>
</html>