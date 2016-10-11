<html>
<head>
<title>Studi Kasus 5_4</title>
<style type="text/css">

</style>
</head>
<body>
<table>
	<?php
	$bilangan = array
		   (
		   array(5,10,15,20,25),
		   array(6,11,16,21,26),
		   array(7,12,17,22,27),
		   array(8,13,18,23,28),
		   array(9,14,19,24,29),
		   array(10,15,20,25,30),
		   array(11,16,21,26,31),
		   array(12,17,22,27,32),
		   array(13,18,23,28,33)
		   );

	for ($row = 0; $row <  9; $row++) {
		echo "<tr>";
		for ($col = 0; $col <  5; $col++) {
			echo "<td>".$bilangan[$row][$col]."</td>";
		}
		echo "</tr>";
	};


	for ($x = 5; $x <= 100; $x++){
		echo '<tr>';
		for($y = $x; $y <= $x+4995; $y = $y + 5){
			echo "<td/>$y</td>";
		}
		echo '</tr>';
	};
	?>
</body>
</html>