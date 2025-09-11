<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo y puede ser seguido de un número.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($) al inicio.</li>';
        echo '<li>$myvar es válida porque inicia con el signo de dolar y una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra y puede contener números.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no es un carácter permitido.</li>';
        echo '</ul>';
    ?>

    <hr>

    <h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c.</p>
    
    <?php
        // a. Mostrar contenido inicial
        echo '<h3>a. Contenido inicial de cada variable</h3>';
        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
        echo "<p>Valor de \$a: $a</p>";
        echo "<p>Valor de \$b: $b</p>";
        echo "<p>Valor de \$c: $c</p>";

        // b. Agregar nuevas asignaciones y c. Volver a mostrar contenido
        echo '<h3>c. Contenido después de las nuevas asignaciones</h3>';
        $a = "PHP server";
        $b = &$a;
        echo "<p>Valor de \$a: $a</p>";
        echo "<p>Valor de \$b: $b</p>";
        echo "<p>Valor de \$c: $c</p>";

        // d. Describir lo que ocurrió
        echo '<h3>d. Descripción de lo ocurrido en el segundo bloque</h3>';
        echo '<p>En el segundo bloque de asignaciones ocurrieron los siguientes cambios debido a la <strong>asignación por referencia</strong> (indicada con el símbolo &):</p>';
        echo '<ol>';
        echo '<li>Al ejecutar <code>$a = "PHP server";</code>, el valor de <code>$a</code> cambió. Como <code>$c</code> fue definida como una referencia a <code>$a</code> (<code>$c = &$a;</code>), su valor también se actualizó automáticamente al nuevo valor de <code>$a</code>.</li>';
        echo '<li>Al ejecutar <code>$b = &$a;</code>, la variable <code>$b</code> dejó de tener su valor original ("MySQL") y se convirtió también en una referencia a <code>$a</code>.</li>';
        echo '<li>Como resultado, las tres variables (<code>$a</code>, <code>$b</code> y <code>$c</code>) terminaron apuntando a la misma dirección en memoria, por lo que todas reflejan el mismo valor final: "PHP server".</li>';
        echo '</ol>';

        echo '<p><strong>Desarrollo de aplicaciones Web - JCCR ®</strong></p>';
    ?>
</body>
</html>