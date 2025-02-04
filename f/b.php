<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
<?php
	$name = "ปรีญามล พลเกิ้น";
	$name .= "อุไร พลเกิ้น";
	$age = 20 ;
	$price = 299.51 ;
	
	echo "ชื่อ-สกุล: " .$name."<br>" ;
	echo "อายุ: ".$age." ปี<br>" ;
	echo "ราคา: ".$price." บาท<hr>" ;
	
	echo gettype($name)."<br>";
	var_dump($name)."<br>";
	var_dump($age);
?>
</body>
</html>