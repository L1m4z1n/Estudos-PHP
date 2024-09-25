<form action="distancia.php" method="get">
        Qual a distância até a casa de sua irmã? <input type="number" name="a"> <br>
        Consumo de seu carro? <input type="number" name="b"><br>
        Preço da gasolina? <input type="number" name="c"><br>
        <button type="submit">Enviar</button>
</form>

<?php

$distancia = @$_REQUEST['a'];
$consumo = @$_REQUEST['b'];
$preco = @$_REQUEST['c'];

print "A distância até a casa de sua irmã é de ".$distancia. " KM";

print "O consumo de seu carro foi de ".$consumo." L";

print "A gasolina está custando ".$preco." R$";

$gasto = $preco/$consumo;
$gasosa=$preco*$consumo;

print "Maria gastara ".$gasosa." em gasolina e seu carro ira consumir ".$gasto."L";