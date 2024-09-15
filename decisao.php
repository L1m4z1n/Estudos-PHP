<form action="decisao.php" method="get">
        A <input type="number" name="a">
        <select name="operacao" id="op">
            <optgroup label="Operação">
                <option value="1">Soma</option>
                <option value="2">Subtração</option>
                <option value="3">Multiplicação</option>
                <option value="4">Divisão</option>
            </optgroup>
        </select>
        B <input type="number" name="b">
        <button type="submit">Enviar</button>
    </form>

<?php
$a = @$_REQUEST['a'];
$b = @$_REQUEST['b'];

$soma=$a+$b;
$sub=$a-$b;
$mult=$a*$b;
$div=$a/$b;

switch (@$_REQUEST['operacao']) {
    case 1:
        echo "Resultado: $a + $b = $soma";
        break;
    
    case 2:
            echo "Resultado: $a - $b = $sub";
            break;  
            
    case 3:
                echo "Resultado: $a vezes $b = $mult";
                break;

    case 4:
                    echo "Resultado: $a divido por $b = $div";
                    break;
    default:
        echo "Falha no código";
        break;
}
?>