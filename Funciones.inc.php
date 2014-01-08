<?php 
$func = new Funciones();
$func->valExpression("2+5+3-5+8-2*5");
class Funciones
{
	function valExpression($expresion){
		$symbols = array("+");
		$var = array();
		$cn = 0;
		foreach ($symbols as $key => $value) {
			$arr = explode($value,$expresion);
			echo "<br>";
			print_r($arr);
		}
		foreach ($arr as $key => $value) {
			if(is_numeric($value)){
				$final[$cn] = $value;
				$final[$cn+1] = "+";
				$cn += 2;
			}
		}
		if(!is_numeric(array_pop($final))){
			array_push($final,"");
		}
		
		echo "<br>otro<br>";
		print_r($arr);
		echo "<br>final<br>";
		print_r($final);
		// while (strpos($expresion, needle)) {
		// 	# code...
		// }
	}
}
?>