<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Portal Personal</title>
</head>

<body>
<h1>Accede a tu portal personal</h1>

<form method="post" action="login.php">
    <label>Usuario:</label>
    <input type="text" name="usuario" required><br><br>

    <label>Contraseña:</label>
    <input type="password" name="password" required><br><br>
    <input type="checkbox" name="recordar">Recordar credenciales<br><br>

    <input type="submit" value="Entrar">
</form>

</body>
</html>