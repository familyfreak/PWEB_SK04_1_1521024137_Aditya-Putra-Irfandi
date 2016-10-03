<!DOCTYPE html>
<html>
<head>
	<title>Aditya Putra Irfandi</title>
</head>
<body>
<form>
	<input type="text" name="t">
	<input type="button" value="Submit">
</form>
	<?php
		$t = "MB25";
		if ($t == "MB25"){
			echo "Nama Barang : Mother Board<br>Harga : 250.000";
		}
		elseif ($t == "PR80") {
			echo "Nama Barang : Printer<br>Harga : 750.000";
		}
		elseif ($t == "M717") {
			echo "Nama Barang : Mouse<br>Harga : 30.000";
		}
		elseif ($t == "MM34") {
			echo "Nama Barang : Memory<br>Harga : 150.000";		
		}
		elseif ($t == "K987") {
			echo "Nama Barang : Keyboard<br>Harga : 35.000";		
		}
		else {
			echo "Data Tidak ada";		
		}
	?>
</body>
</html>