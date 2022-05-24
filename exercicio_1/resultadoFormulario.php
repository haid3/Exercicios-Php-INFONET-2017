<h1>ARITMÉTICA</h1>
<meta charset="utf-8">
<?php

$x=$_GET["V1"];
$y=$_GET["V2"];

	$soma= $x + $y;
	echo "Soma: " .$soma."<br>";
	
	$subtracao= $x - $y;
	echo "Subtração: " .$subtracao."<br>";
	
	$multi = $x * $y;
	echo "Multiplicação: " .$multi."<br>";
	
	$divisao = $x / $y;
	echo "Divisão: " .$divisao."<br>";
	
	$resto = $x % $y;
	echo "Resto da Divisão: ".$resto."<br>";

?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>
    <a href="/exercicios/index.php"><input style="margin-top:20px" type="submit" value="Index"> </a>

