<h1>VOTOS DOS CANDIDATOS</h1>
<meta charset="utf-8">
<?php

$candidato1=$_GET["candidato1"];
$candidato2=$_GET["candidato2"];
$branco=$_GET["branco"];
$nulos=$_GET["nulos"];


	
	$valortotal = $candidato1 + $candidato2 + $branco + $nulos;
		echo "A quantidade total de votos é: " .$valortotal."<br>";
		/*echo "total de votos é $valortotal <br>"; OUTRA OPÇAÕ DE ESCREVER */

	$valorvalidos = $candidato1 + $candidato2;
		echo "A quantidade total de votos validos é: " .$valorvalidos."<br>";		

	$total1 = ( $candidato1 * 100 ) / $valortotal;
	$total1b = number_format($total1, 2);
		echo "A porcentagem de votos do candidato 1 é: " .$total1b."%<br>";


	$total2 = ( $candidato2 * 100 ) / $valortotal;
	$total2b = number_format($total2, 2);
		echo "A porcentagem de votos do candidato 2 é: " .$total2b."%<br>";

?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>



