<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- Especifica la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Configura la vista para dispositivos móviles -->
    <title>REGISTRO</title> <!-- Título de la página -->
    <link rel="stylesheet" href="../CSS/registro.css">
</head>
<body>
    <form method="post" action="register.php"> <!-- Formulario con método POST y acción "register.php" -->
        <label for="username">USUARIO:</label> <!-- Etiqueta para el campo de usuario -->
        <input type="text" id="UserName" name="username" required/><br> <!-- Campo de texto para el nombre de usuario -->
        <label for="password">CONTRASEÑA:</label><br><!-- Etiqueta para el campo de contraseña -->
        <input type="password" id="UserPw" name="password" required/><br> <!-- Campo de contraseña -->
        <label for="Tel">TELEFONO:</label><br> <!-- Etiqueta para el campo de teléfono -->
        <input type="number" id="Tel" name="Tel" required/><br> <!-- Campo de número para el teléfono -->
        <label for="edad">EDAD:</label><br> <!-- Etiqueta para el campo de edad -->
        <input type="number" id="edad" name="edad" required/><br> <!-- Campo de número para la edad -->
        <label for="correoelectronico">CORREO ELECTRONICO:</label><br> <!-- Etiqueta para el campo de correo electrónico -->
        <input type="email" id="correoelectronico" name="correoelectronico" required/><br> <!-- Campo de correo electrónico -->
        <input type="submit" value="registrar"/> <!-- Botón de enviar el formulario -->
    </form>
</body> 
</html>
