<?php 
$func = new Funciones();
$func->valExpression("2+5+3-5+8-2*5");

class Funciones
{
	function valExpression($expresion){
		eval(echo $expresion);
		
	}
}
?>