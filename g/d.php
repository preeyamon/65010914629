<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
<h1>ปรีญามล พลเกิ้น(ฟุ้กกี้)</h1>

<form method="post" action="">
	จำนวน<input type="number" min="1" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>
 
<?php
if(isset($_POST['Submit'])) {
	$count=$_POST['a'];
	echo "แสดงจำนวน $count รูป <br><br>";
	for($i=1; $i<=$count; $i++){ 
?>
    <img src="2.png" width="400">
<?php 
	} //end for
} //end if ?>

</body>
</html>