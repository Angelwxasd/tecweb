<?php
// src/funciones.php

// Ejercicio 1: comprobar si un número es múltiplo de 5 y 7
function esMultiplo5y7($numero) {
    if ($numero % 5 == 0 && $numero % 7 == 0) {
        return "El número $numero es múltiplo de 5 y 7.";
    } else {
        return "El número $numero NO es múltiplo de 5 y 7.";
    }
}

// Ejercicio 2: generar números aleatorios hasta obtener la secuencia impar, par, impar
function generarSecuenciaImparParImpar() {
    $matriz = [];
    $iteraciones = 0;

    while (true) {
        $fila = [];
        for ($i = 0; $i < 3; $i++) {
            $fila[] = rand(100, 999); // números de 3 cifras (como en el ejemplo)
        }
        $matriz[] = $fila;
        $iteraciones++;

        // Revisamos si cumple el patrón: impar, par, impar
        if ($fila[0] % 2 != 0 && $fila[1] % 2 == 0 && $fila[2] % 2 != 0) {
            break;
        }
    }

    // Cantidad total de números generados
    $totalNumeros = $iteraciones * 3;

    return [
        "matriz" => $matriz,
        "iteraciones" => $iteraciones,
        "totalNumeros" => $totalNumeros
    ];
}

// Ejercicio 3a: buscar con while el primer número múltiplo de $divisor
function encontrarMultiploWhile($divisor) {
    $contador = 0;
    $numero = null;

    while (true) {
        $contador++;
        $numero = rand(1, 1000);
        if ($numero % $divisor == 0) {
            break;
        }
    }

    return [
        "numero" => $numero,
        "intentos" => $contador
    ];
}

// Ejercicio 3b: buscar con do-while el primer número múltiplo de $divisor
function encontrarMultiploDoWhile($divisor) {
    $contador = 0;
    $numero = null;

    do {
        $contador++;
        $numero = rand(1, 1000);
    } while ($numero % $divisor != 0);

    return [
        "numero" => $numero,
        "intentos" => $contador
    ];
}