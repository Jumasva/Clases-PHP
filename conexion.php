<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            }

        .login-box {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 100px auto;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 94.5%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-box input[type="submit"] {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background: #007BFF;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-box input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Iniciar Sesión</h2>
        <form action="form.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario"     ame="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <input type="submit" value="Ingresar">
        </form>
    </div>

    <?php

    // abstracción del formulario de login con POO

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        class Usuario
        {
            private $user;
            private $password;

            public function iniciar_usuario($usuario, $contrasena)
            {
                $this->user = $usuario;
                $this->password = $contrasena;
            }

            public function mostrar_usuario()
            {
                echo "Usuario: " . $this->user . "<br>";
                echo "Contraseña: " . $this->password . "<br>";
            }
        }

        $user1 = new Usuario();
        $user1->iniciar_usuario($usuario, $contrasena);
        $user1->mostrar_usuario();
    }


    echo "<br>";

    // Conexión a la base de datos con POO

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
    
    conectarDB();

    ?>
</body>

</html>