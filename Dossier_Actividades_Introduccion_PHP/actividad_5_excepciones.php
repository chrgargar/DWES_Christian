<?php
function dividir($numerador, $denominador) {
    
    if ($denominador == 0) {
    throw new Exception("Error: División por cero no permitida.");

    }

    return $numerador / $denominador;

    }

try {
    
    echo "Válida: 10 / 2 = " . dividir(10, 2) . "<br>";
    echo "Inválida: 5 / 0 = " . dividir(5, 0) . "<br>";

} catch (Exception $e) {

    echo "Excepción capturada: " . $e->getMessage();

}