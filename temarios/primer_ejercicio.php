<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase de PHP</title>
</head>

<body>

    <?php
    // esto es un ejercicio de variables en PHP
    // estos son arrays

    $array = array("uno", "dos", "tres");
    echo "<h2> Array de ejemplo: <h2>";

    echo "Estos son los elementos del array: " . $array[0] . ", " . $array[1] . " y " . $array[2];


    $numero = 124;
    $cadena_numero = "124";

    echo "<br>";
    echo "<br>";

    // ejercicios de aritmetica 
    $a = 10;
    $b = 5;
    $suma = $a + $b;
    $resta = $a - $b;
    $multi = $a * $b;
    $div = $a / $b;

    echo "Resultados: Suma: " . $suma . ", Resta: " . $resta . ", Multiplicacion: " . $multi . ", División: " . $div;


    // ejercicio en clase

    // El señor Carlos y su esposa tiene 5 hijos y 2 nietos
    // Los nietos tuvieron 5 hijos cada uno
    // pasado el tiempo fallecieron 2 hijos y un nueto
    // EL sseñor carlos muy triste cuenta cuantas personas quedaron en la familia incluyendolo a él
    // Realiza la formula e imprime el resutaldo


    // definicion parametros dados en el enunciado
    $carlos = 1;
    $esposa = 1;
    $hijos = 5;
    $nietos = 2;

    // conteo de hijos de los nietos ( Los nietos tuvieron 5 hijos cada uno )
    $bisnietos = ($nietos * 5);

    // declaracion de fallecidos
    $hijos_muertos = 2;
    $nietos_muertos = 1;

    // suma total de miembros, y resta de fallecidos
    $total = ($carlos + $esposa + $hijos + $nietos + $bisnietos) - ($hijos_muertos + $nietos_muertos);

    // espaciado de presentacion
    echo "<br>";
    echo "<br>";

    // imprimir miembros familia
    echo "<h3> TOTAL DE MIEMBROS DE LA FAMILIA  </h3>";
    print($total);


    // Estructuras de control

    $n1 = 15;
    $n2 = 26;

    // espaciado de presentacion
    echo "<br>";
    echo "<br>";

    if ($n1 > $n2) {
        echo "El número 1 es mayor a número 2 ($n1 > $n2)";
    } else {
        echo "El número 2 es mayor a número 1 ($n2 > $n1)";
    };

    // determinar el número mayor de tres numeros

    $num1 = 10;
    $num2 = 20;
    $num3 = 30;

    if ($num1 > $num2 && $num1 > $num3) {
        echo "<br> El número mayor es: $num1";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "<br> El número mayor es: $num2";
    } else {
        echo "<br> El número mayor es: $num3";
    }


    // IMC
    $peso = 60;
    $altura = 1.70;
    $imc = $peso / ($altura ** 2);

    echo "<br>";
    echo "<h3> Cálculo del IMC </h3>";
    print($imc);
    ?>
</body>

</html>