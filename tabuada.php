<form action="tabuada.php" method="get">
        A <input type="number" name="a">
        <button type="submit">Enviar</button>
</form>

<?php

$a = @$_REQUEST['a'];

if ($a === null) {
    echo "Por favor, insira um número.";
} elseif ($a == 0) {
    echo "Todo número multiplicado por 0 é igual a 0.";
} else {
    echo "Tabuada do $a:<br>";
    $c = 1;
    while ($c <= 10) {
        echo "$a x $c = " . ($a * $c) . "<br>";
        $c++;
    }
}