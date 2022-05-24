<h1> Resultado do jogo</h1>
<meta charset="utf-8">
<?php

$time1=$_GET["time1"];
$golst1=$_GET["golst1"];
$time2=$_GET["time2"];
$golst2=$_GET["golst2"];

if ($golst1 > $golst2){
	echo "O time $time1 ganhou com $golst1 gols";
}

else if ($golst2 > $golst1){
	echo "O time $time2 ganhou com $golst2 gols";
}
?>

<br>

<a href="\exercicios\exercicio_12\formulario.php"><input style="margin-top:10px" type="submit" value="Voltar"></a>
<BR>
	
    <a href="/exercicios/index.php"><input style="margin-top:10px" type="submit" value="Index"></a>