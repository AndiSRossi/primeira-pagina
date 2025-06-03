<?php 
require_once ("funcoes_desconto.php");

$valor_total = 1000;
$desconto = 15;
$valor_final = calcular_desconto($valor_total, $desconto);

?>

Valor total: R$<?php echo $valor_total?><br>
Desconto: <?php echo $desconto?>%<br>
Valor final: R$<?php echo $valor_final?><br>
