<center><h1>Exercício 9</h1></center>

<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$media = ($n1 + $n2) /2;

	if ($media >= 5) {
		echo  "<h2>O aluno foi aprovado.
   		 <br> Sua nota é: "."$media"."<br></h2>" ;
	}elseif ($media < 5){ 
		echo  "O aluno foi reprovado.
    	 <br> Sua nota é: $media <br>";
}
?>
<br>
 <form action="./formulario.php" method="get">
		<input type="submit" value="Refazer"/>
	</form>
	<form action="./index.php" method="get">

	</form>

	<a href="/exercicios/index.php"><input style="margin-top:10px" type="submit" value="Index"></a>