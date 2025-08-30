<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases y Objetos</title>

</head>

<body>


    <?php

    class formulario
    {
        private $label;

        public function inicializar_label($etiqueta)
        {
            $this->label = $etiqueta;
        }

        public function mostrar_form()
        {
            echo "<form action='#' method='post'>";
            echo "<label>" . $this->label . "</label>";
            echo "<input type='text'>";
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    }
    $form1 = new formulario();
    $form1->inicializar_label("Usuario: ");
    $form1->mostrar_form();


    $form2 = new formulario();
    $form2->inicializar_label("Contraseña:");
    $form2->mostrar_form();

    
    $form3 = new formulario();
    $form3->inicializar_label("Edad:");
    $form3->mostrar_form();
    ?>
</body>

</html>