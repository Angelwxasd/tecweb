<?php
// src/funciones.php

// Ejercicio 1: comprobar si un número es múltiplo de 5 y 7
function esMultiplo5y7($numero) {
    if ($numero % 5 == 0 && $numero % 7 == 0) {
        return "✅ El número $numero es múltiplo de 5 y 7.";
    } else {
        return "❌ El número $numero NO es múltiplo de 5 y 7.";
    }
}
