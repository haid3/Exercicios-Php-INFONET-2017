<html>
<style>
	table{
		border-collapse: collapse;
		float:left;
		margin-left: 10px;
			}
</style>
</html>
<?php

for ($t = 1; $t <= 10; $t++) {
	echo "<table border='1'>";
	for ($i = 0; $i <=10; $i++) {
		$res = $t * $i;
		echo "<tr><td>$t X $i = $res </td> </tr>";
}
	echo "</table>";
	?>