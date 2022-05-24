<h1>2 VALORES EM ORDEM CRESCENTE</h1>
<meta charset="utf-8">
<?php

$valor1=$_GET["valor1"];
$valor2=$_GET["valor2"];

	
	if ($valor1 > $valor2){
		echo $valor2. " e " .$valor1;
	}
	else { 
	    echo $valor1. " e " .$valor2;
	}  
?>	

<br>
	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>
    <a href="/exercicios/index.php"><input style="margin-top:10px" type="submit" value="Index"></a>

    <br>


