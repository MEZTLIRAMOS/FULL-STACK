<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- Especifica la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Configura la vista para dispositivos móviles -->
    <title>REGISTRO</title> <!-- Título de la página -->
    <link rel="stylesheet" href="./CSS/error.css">
</head>
<body>
<?php
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "practica";
//crear conexion 
// $conn = new mysqli($host,$user,$pass,$db);
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
//verificar conexion 
if($conn->connect_error){
    die("conexion fallida: " . $conn->connect_error);
}
//recoger los datos del formulario
$UserName = $_POST['username'];
$UserPw = $_POST['password'];

//crear la consulta SQL 
$sql = "SELECT * FROM usuario1 WHERE UserName = '$UserName' AND UserPw = '$UserPw'";

//ejecuta la consulta 
$result = $conn->query($sql);

//verifica si el usuario existe 
if($result->num_rows > 0){
include ('views/logged.html');
//echo "has ingresado con exito"

}else{
    include('views/errorLogin.html');
    //echo "ususario o contraseña incorrectos"
}
$conn->close();
?>
</body> 
</html>