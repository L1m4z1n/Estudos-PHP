<form action="impapar.php" method="get">
        Impar ou Par <input type="number" name="a">
        <button type="submit">Enviar</button>
    </form>

<?php

$a = @$_REQUEST['a'];

if($a%2==0){
    print $a." é par";
} else {
    print $a. " é impar";
}
