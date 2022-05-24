	<TITLE> Numeros inteiros até X </TITLE>
<meta charset="utf-8">
<?php

$num=0;

$valor=$_GET["valor"];
while ($num <= $valor){
	echo  $num.  "<br>"; 
	$num++ ;
}


?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar ao exercício"></a>