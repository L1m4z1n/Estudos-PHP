<form action="facul.php" method="get">
        A <input type="number" name="a">
        B <input type="number" name="b">
        <button type="submit">Enviar</button>
</form>

<?php

$a = @$_REQUEST['a'];
$b = @$_REQUEST['b'];

$soma=$a+$b;

if ($soma>20) {
    $alt=$soma+8;
    echo "A soma de " .$a. " mais " .$b. "vai ser somada por 8 se o resultado for maior que 20 e o resultado será" .$alt;
}
elseif ($soma<=20) {
    $alt=$soma-5;
    echo $soma." vai subtrair por 5 e o resultado será" .$alt;
}

