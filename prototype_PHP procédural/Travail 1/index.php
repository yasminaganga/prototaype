<?php
$n1 = 17;
$n2 = 10;

$operations = ["+", "-", "*", "/"];

function calculer($n1, $n2, $operation){
    switch ($operation) {
        case "+": return $n1 + $n2;
        case "-": return $n1 - $n2;
        case "*": return $n1 * $n2;
        case "/":
            if ($n2 == 0) {
                return "Erreur : division par zéro";
            }
            return $n1 / $n2;
        default:
            return "Erreur : opération invalide";
    }
}

foreach ($operations as $op) {

 
    switch ($op) {
        case "+": $typeOp = "Addition"; break;
        case "-": $typeOp = "Soustraction"; break;
        case "*": $typeOp = "Multiplication"; break;
        case "/": $typeOp = "Division"; break;
        default: $typeOp = "Opération inconnue";
    }

    $resultat = calculer($n1, $n2, $op);

    echo "Nombre 1 : $n1 <br>";
    echo "Nombre 2 : $n2 <br>";
    echo "Type d'opération : $typeOp ($op) <br>";
    echo "Résultat : $resultat <br>";
    echo "<br>";
}
?>