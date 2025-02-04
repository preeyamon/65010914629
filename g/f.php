<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
<h1>ปรีญามล พลเกิ้น(ฟุ้กกี้) สูตรคูณwhile</h1>

<form method="post" action="">
	แม่สูตรคูณ<input type="number" min="2" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>
 
<?php
if(isset($_POST['Submit'])) {
	$m=$_POST['a'];  //m=แม่สูตรคูณ,a=ตัวเลขที่รับเข้ามา
	$i=1;
	while($i<=12){
		$x=$m*$i; 
?>
	<?=$m;?> x <?=$i;?> = <?=$x;?> <br>
<?php 
$i++;
	} //end while
} //end if ?>

</body>
</html>