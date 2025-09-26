<?php
// index.php
include "src/funciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']);
        echo "<p>" . esMultiplo5y7($numero) . "</p>";
    } else {
        echo "<p>Pasa un número en la URL usando <code>?numero=</code>. Ejemplo: 
        <br> <code>http://localhost/p07/index.php?numero=35</code></p>";
    }
    ?>


    <h2>Ejercicio 2: Secuencia impar, par, impar</h2>
    <?php
    $resultado = generarSecuenciaImparParImpar();
    $matriz = $resultado["matriz"];
    $iteraciones = $resultado["iteraciones"];
    $totalNumeros = $resultado["totalNumeros"];

    echo "<table border='1' cellpadding='5'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $num) {
            echo "<td>$num</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p>$totalNumeros números obtenidos en $iteraciones iteraciones.</p>";
    ?>


    <h2>Ejercicio 3: Buscar el primer múltiplo de un número dado</h2>
    <?php
    if (isset($_GET['divisor'])) {
        $divisor = intval($_GET['divisor']);

        $resultadoWhile = encontrarMultiploWhile($divisor);
        $resultadoDoWhile = encontrarMultiploDoWhile($divisor);

        echo "<p><strong>Con while:</strong> Se encontró el número {$resultadoWhile['numero']} en {$resultadoWhile['intentos']} intentos.</p>";
        echo "<p><strong>Con do-while:</strong> Se encontró el número {$resultadoDoWhile['numero']} en {$resultadoDoWhile['intentos']} intentos.</p>";
    } else {
        echo "<p>Pasa un divisor en la URL usando <code>?divisor=</code>. Ejemplo: 
        <br> <code>http://localhost/p07/index.php?divisor=7</code></p>";
    }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>
</body>
</html>