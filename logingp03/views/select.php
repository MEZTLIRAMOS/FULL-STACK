<?php
$servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "practica";

    // Crea la conexión
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//verifica la conexion 
if ($conn->connect_errno){
    die("error de conexion: " . $conn->connect_errno);
}
//consulta para obtener los datos de la tabla "Usuario"
// $sql = "SELECT ID, userName, userPw FROM usuario";
$result = $conn->query("SELECT ID, UserName, UserPw FROM usuario1");
if($result->num_rows > 0){// Comprueba si hay filas devueltas por la consulta
    echo "<table>"; // Inicia la tabla HTML
    echo "<tr><th>ID</th><th>Nombre</th><th>Contraseña</th></tr>"; // Crea la fila de encabezado de la tabla
    while($row=$result->fetch_assoc()){// Recorre cada fila devuelta por la consulta
        echo "<tr><td>" .$row["ID"] ."</td><td>" .$row["UserName"] ."</td><td>" .$row["UserPw"] ."</td></tr>";
        // Crea una fila de datos para cada fila de resultado, mostrando ID, Nombre y Contraseña
    }
    echo "</table>"; // Cierra la tabla HTML
}else {// Si no se encontraron registros
    echo "no se encontraron registros."; // Muestra un mensaje indicando que no se encontraron registros
}
$conn->close(); // Cierra la conexión a la base de datos
?>
