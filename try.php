<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>


<?php

function conectarBD() {
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "usuario_php";

    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    } else {
        echo "";
    }

    return $conn;
}


//consultar base de datos
function consultarBD() {
    $conn = conectarBD();
    // Consulta para obtener los usuarios registrados
    $sql = "SELECT id, username, password, created_at, updated_at FROM login_user";
    $result = $conn->query($sql);
    // retorna el resultado de la consulta
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }
    return $result;
}



$result = consultarBD();
/* 

$array = $result->fetch_row();
var_dump($array);


echo "<br><br>";

if (empty($array)) {
    echo "No hay datos en la tabla.";
} else {
    for ($i = 0; $i < count($array); $i++) {
        echo "Elemento $i: " . $array[$i] . "<br>";
    }
}

*/
echo "<br><br>";
 


if ($result && $result->num_rows > 0): 
    // Recorre todos los registros obtenidos de la base de datos con la consulta SQL.
    while($row = $result->fetch_assoc()): 

        echo "<br>";
        echo "<br>";
        echo "ID: " . $row["id"]. " - Usuario: " . $row["username"]. " - Contraseña: " . $row["password"]. " - Creado: " . $row["created_at"]. " - Actualizado: " . $row["updated_at"]. "<br>";
    endwhile; 
else: 
    echo "0 resultados";
endif;
?>

</body>
</html>