<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesión cerrada</title>
</head>
<body>
    <h1>Sesión cerrada</h1>
    <p>Has cerrado la sesión correctamente</p>
</body>
</html>