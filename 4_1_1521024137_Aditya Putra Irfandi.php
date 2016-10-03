<html>
	<head>
	<title>Aditya Putra Irfandi</title>
	</head>
	<body>
	<?php
	$x = 85;
	if (($x >= 0)&&($x <=59)){
	echo "Cukup";
}
	elseif (($x > 59)&&($x < 85)){
		echo "Baik";
}
	elseif (($x >= 85)&&($x <= 100)){
		echo "Baik Sekali";
}	
	else {
		echo "Inputan Salah";
	}
	?>
	</body>
</html>