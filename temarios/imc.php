<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular índice masa corporal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        fieldset {
            border: none;
            padding: 0;
        }

        legend {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #555;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #0077cc;
            outline: none;
        }

        input[type="submit"] {
            background-color: #0077cc;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #005fa3;
        }

        .resultado {
            margin-top: 30px;
            padding: 20px;
            border-left: 6px solid;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <h1>Calculadora de Índice de Masa Corporal</h1>

    <form action="imc.php" method="post" class="formulario">
        <fieldset class="datos--necesarios">
            <legend>Datos Necesarios</legend>

            <label for="altura" class="label--altura">Altura:</label>
            <input type="text" required name="altura" class="input--altura" step="0.01" min="0">

            <label for="peso" class="label--peso">Peso:</label>
            <input type="text" required name="peso" class="input--peso" step="0.01" min="0">

            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $altura = floatval($_POST["altura"]);
        $peso = floatval($_POST["peso"]);

        if ($altura > 0) {
            $imc = round($peso / ($altura ** 2), 2);

            // Interpretación del resultado
            if ($imc < 18.5) {
                $mensaje = "Bajo peso";
                $color = "#FFA726"; // naranja
            } elseif ($imc < 24.9) {
                $mensaje = "Peso normal";
                $color = "#66BB6A"; // verde
            } elseif ($imc < 29.9) {
                $mensaje = "Sobrepeso";
                $color = "#FFCA28"; // amarillo
            } else {
                $mensaje = "Obesidad";
                $color = "#EF5350"; // rojo
            }

            echo "<div class='resultado' style='border-color: $color;'>
                    <strong>Tu IMC es:</strong> $imc <br>
                    <strong>Clasificación: </strong> $mensaje
                  </div>";
        } else {
            echo "<p style='color: red; margin-top: 20px;'>Por favor ingresa una altura válida.</p>";
        }
    }
    ?>

    
</body>

</html>