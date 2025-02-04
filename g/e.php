<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
<h1>ปรีญามล พลเกิ้น(ฟุ้กกี้)</h1>

<form method="post" action="">
	แม่สูตรคูณ<input type="number" min="2" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>
 
<?php
if(isset($_POST['Submit'])) {
	$m=$_POST['a'];  //m=แม่สูตรคูณ,a=ตัวเลขที่รับเข้ามา
	for($i=1; $i<=12; $i++){
		$x=$m*$i; 
?>
	<?=$m;?> x <?=$i;?> = <?=$x;?> <br>
<?php 
	} //end for
} //end if ?>

</body>
</html>