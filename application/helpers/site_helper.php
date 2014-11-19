<?php

function calculoPorcentagem($valor, $percentual)
{
	$percentual = $percentual / 100.0; // 15%
	$valor_final = $valor + ($percentual * $valor);
	return numberFormat($valor_final);
	
}

function calculoDeLucro($valor1, $valor2)
{
	$p_lucro = 0;
	while($p_lucro + (($p_lucro / 100) * $p_lucro) < $valor2)
	{
		$p_lucro = $p_lucro + 0.1;
	} 
}

function numberFormat($number)
{
	return number_format($number, 2, '.', '');
}
?>