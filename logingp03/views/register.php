<?php 
// Comienza un bloque de código PHP que se ejecutará si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["username"]; // Cambiado a "username"
    $UserPw = $_POST["password"]; // Cambiado a "password"
    $Tel = $_POST["Tel"];
    $edad = $_POST["edad"];
    $correoelectronico = $_POST["correoelectronico"];

    $servername = "localhost";// Dirección del servidor de la base de datos
    $dbusername = "root"; // Nombre de usuario de la base de datos
    $dbpassword = ""; // Contraseña de la base de datos
    $dbname = "practica"; // Nombre de la base de datos a la que se desea conectar

    // Crea la conexión
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Verifica la conexión 
    if ($conn->connect_errno) {
        die("Connection failed: " . $conn->connect_errno);
    }

    // Prepara la sentencia SQL
    $stmt = $conn->prepare("INSERT INTO usuario1 (UserName, userPw, Tel, edad, correoelectronico) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("sssss", $UserName, $UserPw, $Tel, $edad, $correoelectronico);

    // Ejecuta la sentencia SQL 
    if ($stmt->execute()) {

        echo "Usuario registrado con éxito";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    // Cierra la sentencia y la conexión
    $stmt->close();
    $conn->close();
}
?>