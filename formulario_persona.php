<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Personas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-box label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-box input[type="text"],
        .form-box input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-box .sexo {
            margin-bottom: 20px;
        }

        .sexo {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .form-box .sexo label {
            font-weight: normal;
            margin-right: 10px;
            margin-top: 8px;
        }

        .form-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #28a745;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        #fecha::placeholder {
            font-family: sans-serif;
        }

        .form-box input[type="submit"]:hover {
            background: #218838;
        }

        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        fieldset {
            border: none;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="form-box">
        <h2>Ingreso de Persona</h2>
        <form action="procesar_persona.php" method="post">

            <fieldset>
                <legend> Datos de la persona</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>

                <label for="fecha">Fecha de Nacimiento:</label>
                <input type="date" id="fecha" name="fecha_nacimiento" placeholder="dd/mm/aaaa" required>

                <label>Sexo:</label>
                <div class="sexo">
                    <input type="radio" id="masculino" name="sexo" value="Masculino" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" id="femenino" name="sexo" value="Femenino">
                    <label for="femenino">Femenino</label><br>
                    <input type="radio" id="otro" name="sexo" value="Otro">
                    <label for="otro">Otro</label>
                </div>

                <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>