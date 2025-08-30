<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP Formulario</title>
</head>

<body>

    <!-- Este es un formulario en HTML para trabajar con  -->
    <form action="formulario.php" method="post">
        <fieldset>
            <legend> Datos Básicos </legend>
            <label>Nombre:
                <input type="text" name="nombre" required placeholder="Juan">
            </label>
            <br>

            <label>Apellido:
                <input type="text" name="apellido" required placeholder="Serrano ">
            </label>
            <br>

            <label>Edad:
                <input type="number" name="edad" require>
            </label>

            <input type="submit" name="boton_enviar" value="Enviar">
        </fieldset>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];

            echo "$nombre";
            echo "<br>";
            echo "$apellido";
            echo "<br>";
            echo "$edad";
        }
    ?>
    
</body>
</html>