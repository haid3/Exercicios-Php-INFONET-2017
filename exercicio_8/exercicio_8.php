<h1>Maças</h1>
<meta charset="utf-8">
<?php

$maca=$_GET["maca"];



	
	if ($maca < 12){
		$valor = $maca * 1.30;
	}

	else  {
		$valor = $maca * 1.0;
	}
	
?>	

	<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>
    <a href="/exercicios/index.php"><input style="margin-top:10px" type="submit" value="Index"></a>


<a href="formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>