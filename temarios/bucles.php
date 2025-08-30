<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        .texto {
            font-family: Montserrat;
            color: #333;
            font-size: 1em;
            line-height: 5px;
        }

        .divisor {
            width: 100%;
            height: 2px;
            background-color: #ccc;
            margin: 20px 0;
        }
    </style>
</head>

<body>

    <?php

    // Bucle while
    $contador = 1;
    while ($contador <= 5) {
        echo "<p class='texto'>Contador: $contador </p> <br>";
        $contador++;
    }

    echo "<div class='divisor'> </div>";

    // Bucle do while
    $contador = 1;
    do {
        echo "<p class='texto'>Contador: $contador </p> <br>";
        $contador++;
    } while ($contador > 5);


    echo "<div class='divisor'> </div>";

    // Bucle for
    for ($contador = 1; $contador <= 5; $contador++) {
        echo "<p class='texto'>Contador: $contador </p> <br>";
    }


    echo "<div class='divisor'> </div>";

    // Bucle foreach
    $array = ["Juan", "Pedro", "Maria", "Ana"];
    foreach ($array as $nombre) {
        echo "<p class='texto'>Nombre: $nombre </p> <br>";
    }

    ?>
</body>

</html>