<?php

    //evaluar si se esta enviando algo
    if(isset($_POST["enviar"])){

//declaracion de variables
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacion = strtolower($_POST["operacion"]);

//operaciones a realizar
$operaciones = array("suma","resta","multiplicacion","division");

//evaluar si la operacion existe en el array $operaciones
if(!in_array($operacion, $operaciones)){
    echo "La operacion no es valida";
    exit();
}

//realizar la operacion
switch($operacion){
    case "suma":
        $resultado = $num1 + $num2;
        break;
    case "resta":
        $resultado = $num1 - $num2;
        break;
    case "multiplicacion":
        $resultado = $num1 * $num2;
        break;
    case "division":
        if($num2 == 0){
            echo "No se puede dividir por cero";
            exit();
        }
        $resultado = $num1 / $num2;
        break;
}

//imprimir resultado
echo "El resultado de la $operacion de $num1 y $num2 es: $resultado";
}
?>

