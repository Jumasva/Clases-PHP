<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexcion DB</title>
</head>


<body>


    <?php

    function conectarDB()
    {
        $host = "localhost";
        $dbuser = "root";
        $password = "";
        $dbname = "usuario_php";

        $conexion = new mysqli($host, $dbuser, $password, $dbname);

        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        } else {
            echo "Conexión exitosa a la base de datos.";
        }
        return $conexion;
    }


    function consultarDB() {
        $conexion = conectarDB();
        $sql = "SELECT id, username AS username, password, created_at, updated_at FROM login_user";
        $result = $conexion->query($sql);

        $stmt = $conexion->prepare($sql);

        if (!$result) {
            die("Error en la consulta: " . $conexion->error);
        } 
        return $result;
    }

    $resultado = consultarDB()
    
    ?>

</body>


</html>