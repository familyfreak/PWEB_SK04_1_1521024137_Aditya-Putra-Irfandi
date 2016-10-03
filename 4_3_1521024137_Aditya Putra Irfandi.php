<!DOCTYPE html>
<html>
<head>
	<title>Aditya Putra Irfandi</title>
</head>
<body>

	<?php
	echo "Segitiga Penuh :<br>";
		 for ($i = 0; $i < 9; $i++) {
 for ($j = 9; $j > $i; $j--) {
 echo "&nbsp;";
 }
 for ($k = 0; $k <= $i; $k++) {
 echo "*";
 }
 echo "<br/>";
 }
 	echo "Segitiga Setengah Kanan :";
	echo "<br/>";
	for( $i=9;$i>0;$i--)
{
for($j=10;$j>$i;$j--)
{
echo "*";
}
echo"<br/>";
}	
	echo "Segitiga Setengah Kiri :";
	echo "<br/>";
	for( $i=9;$i>0;$i--)
{
for($j=1; $j<=$i; $j++)
{
echo "  ";
}
for($k=10;$k>$i;$k--)
{
echo "*";
}
echo "<br/>";
}
	?>
</body>
</html>