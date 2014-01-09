<?php 
$func = new Funciones();
$func->valExpression("2+5+3-5+8-2*5");
class Funciones
{
	function valExpression($expresion){
		$simbolos = array('+','-','/','*');
		foreach ($simbolos as $llave => $valor) {
			
		}
		$arr = explode($valor, $expresion);
		$cn = 0;
		$i = 0;
		foreach ($arr as $key => $value) {
			$result = $cn % 2;
			if($result == 0 && is_numeric($value)){
				echo "||$value||";
				$arrSum[$i] = $value;
				$arr[$i] = "";
			}else if($result == 1 && is_numeric($value)){
				$i++;
				$arrSum[$i] = $valor;
				$arr[$i] = "";
				$i++;
				$arrSum[$i] = $value;
			}
			$cn ++;
			// echo "<br>".$result."<br>"; 
		}
		$arr = array_filter($arr);
		print_r($arr);
		echo "<br>";
		print_r($arrSum);
	}
}
?>