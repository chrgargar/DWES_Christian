<?php

$contador = 10;

$puntos = 5;

function incrementar_copia($numero)
{
    $numero++;
    echo "Funcion incrementar_copia: $numero <br>";
}

echo "Valor: $contador <br>";

incrementar_copia($contador);
echo "Valor contador tras incrementar: $contador<br><br>";

function incrementar_referencia(&$numero)
{
    $numero++;
    echo "Dentro de la función (referencia): $numero<br>";
}

echo "Valor original de puntos: $puntos<br>";
incrementar_referencia($puntos);
echo "Variable puntos tras incrementar referencia: $puntos<br>";
