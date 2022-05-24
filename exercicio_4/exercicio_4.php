<h1>ÁREA DO RETANGULO</h1>
<meta charset="utf-8">
<?php

$salario=$_GET["salario"];
$corre=$_GET["corre"];


	
	$valor = $salario * ( $corre / 100) + $salario;
	echo "O valor do salário reajustado é: " .$valor."<br>";

?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>



