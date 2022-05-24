<h1>MOSTRE O MAIOR ENTRE 3 NUMEROS</h1>
<meta charset="utf-8">
<?php

$valor1=$_GET["valor1"];
$valor2=$_GET["valor2"];
$valor3=$_GET["valor3"];
	
	
	if ($valor1 > $valor2 and $valor1 > $valor3 ){
		echo " O maior numero é o primeiro valor: " .$valor1;
	}
	if ($valor2 > $valor1 and $valor2 > $valor3){
	    echo " O maior numero é o segundo valor: " .$valor2;
	}
	if ($valor3 > $valor1 and $valor3 > $valor2){
		echo "O maior numero é o terceiro valor: " .$valor3;
	}
	
?>	

<br>
	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>
    <a href="/exercicios/index.php"><input style="margin-top:10px" type="submit" value="Index"></a>

    <br>


