<h1> Negativo ou Positivo </h1>
<meta charset="UTF-8">
<?php

$valor=$_GET["valor1"];

if ($valor 	> 0){
	echo "O valor digitado é positivo";
}

else if ($valor < 0) {
 	echo "O valor digitado é negativo";
}


else {
	echo "O valor do numero digitado é neutro";
}



?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>



