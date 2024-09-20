<form action="maioremenor.php" method="get">
        A <input type="number" name="a">
        B <input type="number" name="b">
        C <input type="number" name="c">
        <button type="submit">Enviar</button>
</form>

<?php 

$a = @$_REQUEST['a'];
$b = @$_REQUEST['b'];
$c = @$_REQUEST['c'];

if ($a>$b && $c<$a) {
    echo $a." é maior que ".$b." e ".$c;
}
elseif ($b>$c && $a<$b) {
    echo $b." é maior que ".$a." e ".$c;
}
elseif ($c>$a && $b<$c) {
    echo $c." é maior que ".$a." e ".$b;
} else {
    echo "Todos são iguais";
}