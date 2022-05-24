<h1>VOTOS DOS CANDIDATOS</h1>
<meta charset="utf-8">
<?php

$graus=$_GET["graus"];
	
	$celsius = ( $graus - 32 ) / 1.8;

		echo "A temperatura em Graus Celsius é: " .$celsius. "<br>";

?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>



