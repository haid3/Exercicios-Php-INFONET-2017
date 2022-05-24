<h1>Resultado da tabuada escolhida</h1>
<meta charset="utf-8">
<?php

$num=$_GET["num"];
$um = 1;

if($num != is_numeric($num)){
   echo "Não é numero, digite um numero fdp";
}else if ($num > 10){

	echo "Digite um número de 1 a 10";
}
 	else{

   While ($um <= 10){
	echo $um."x".$num."=" .$num * $um. "<br>";
	$um++;		
	
}
}
	

?>	
	<br>	
	<a href="exercicio_26.php"><input style="margin-top:10px" type="submit" value="Voltar"></a> <br>
    <a href="/exercicios/index.php"><input style="margin-top:20px" type="submit" value="Index"> </a>