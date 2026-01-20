<?php
$erreur = "";
$resultat = "";

function calc($a, $b, $op) {
    if ($op == '+' ) return $a + $b;
    if ($op == '-') return $a - $b;
    if ($op == '*') return $a * $b;
    if ($op == '/') return ($b == 0) ? "Erreur : division par zéro" : $a / $b;
}


if (!empty($_POST)) {

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];

    if ($n1 === "" || $n2 === "") {
        $erreur = "Veuillez remplir tous les champs.";
    } elseif (!is_numeric($n1) || !is_numeric($n2)) {
        $erreur = "Veuillez entrer des nombres.";
    } else {
        $res = calc($n1, $n2, $op);
        $resultat = is_numeric($res) ? "$n1 $op $n2 = $res" : $res;
    }
}
?>


<form method="post">
    Nombre 1 : <input type="text" name="n1"><br><br>
    Nombre 2 : <input type="text" name="n2"><br><br>
    Opération :
    <select name="op">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br><br>
    <button>Calculer</button>
</form>

<?php
if ($erreur) echo "<p style='color:red'>$erreur</p>";
if ($resultat) echo "<p style='color::green'>$resultat</p>";
?>
