<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    
    if ($operacion === '/' && $num2 == 0) {
        echo "Error: No se puede dividir entre cero";
    } else {
        $resultado = calculadora($num1, $num2, $operacion);
        echo "Resultado: ".$resultado;
    }
}

function calculadora($a, $b, $op) {
    switch ($op) {
        case '+':
            return sumar($a, $b);
        case '-':
            return restar($a, $b);
        case '*':
            return multiplicar($a, $b);
        case '/':
            return dividir($a, $b);
        
    }
}

function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}
function dividir($a, $b) {
    return $a / $b; 
}

?>