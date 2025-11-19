<?php

$nombre = "Juan";
$edad = 0;
$saldo;
$email = null;
$lista = array();

<<<<<<< HEAD

echo "isset: <br> <br>";
echo "isset(): " . (isset($nombre) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (isset($edad) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (isset($saldo) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (isset($email) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (isset($lista) ? 'true'
: 'false') . "<br>" . "<br>";

echo "empty: <br> <br>";
echo "isset(): " . (empty($nombre) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (empty($edad) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (empty($saldo) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (empty($email) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (empty($lista) ? 'true'
: 'false') . "<br>" . "<br>";

echo "is_null: <br> <br>";
echo "isset(): " . (is_null($nombre) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (is_null($edad) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (is_null($saldo) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (is_null($email) ? 'true'
: 'false') . "<br>";
echo "isset(): " . (is_null($lista) ? 'true'
: 'false') . "<br>" . "<br>";
=======
var_dump(isset($nombre));
var_dump(isset($edad));
var_dump(isset($saldo));
var_dump(isset($email));
var_dump(isset($lista));

var_dump(empty($nombre));
var_dump(empty($edad));
var_dump(empty($saldo));
var_dump(empty($email));
var_dump(empty($lista));

var_dump(is_null($nombre));
var_dump(is_null($edad));
var_dump(is_null($saldo));
var_dump(is_null($email));
var_dump(is_null($lista));
>>>>>>> 7977b56 (19/11/2025)
