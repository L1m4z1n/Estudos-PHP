<form action="url.php" method="get">
        A <input type="number" name="a">
        B <input type="number" name="b">
        C <input type="number" name="c">
        <button type="submit">Enviar</button>
</form>

<?php

$a = @$_REQUEST['a'];
$b = @$_REQUEST['b'];
$c = @$_REQUEST['c'];

$resp= ($a-$b)*$c;

print $resp." é a resposta";