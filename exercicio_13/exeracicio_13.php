<center><h1>Exercício 13</h1></center>

<?php

$litros = $_GET["litros"];
$combustivel = $_GET["combustivel"];
$alcool = 2.70;
$gasolina = 3.60;


if ($combustivel == $alcool and $litros <= 20) {
	$valor1 = ($litros * $alcool) * 0.96;
	echo"O valor a ser pago é: "."R$ "."$valor1"." por "." $litros"." de "."alcool"."<br>";
}else if ($combustivel == $alcool and $litros > 20) {
	$valor2 = ($litros * $alcool) * 0.97;
	echo"O valor a ser pago é: "."R$ "."$valor2"." por "." $litros"." de "."alcool"."<br>";
}elseif ($combustivel == $gasolina and $litros <= 20) {
	$valor3 = ($litros * $gasolina) * 0.97;
	echo"O valor a ser pago é: "."R$ "."$valor3"." por "." $litros"." de "."gasolina"."<br>";
}elseif ($combustivel == $gasolina and $litros > 20) {
	$valor4 = ($litros * $gasolina) * 0.94;
	echo"O valor a ser pago é: "."R$ "."$valor4"." por "." $litros"." de "."gasolina"."<br>";
}
?>
<br>
 <form action=".exercicio_13.php" method="get">
		<input type="submit" value="Refazer"/>
	</form>
	<form action="./index.php" method="get">
		<input type="submit" value="Inicio"/>
	</form>