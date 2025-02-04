<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
<h1>ปรีญามล พลเกิ้น(ฟุ้กกี้)</h1>
 <form method="post" action="">
 ราคาสินค้า <input type="number" name="A" min="0"  autofocus required>
<button type="submit" name="Submit" >OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
 $price = $_POST['A']; 
if ($price >= 5000) {
$discount = $price*0.15 ;
} else if ($price >= 2000) {
$discount = $price*0.10 ;
} else if ($price >= 1000) {
$discount = $price*0.05 ;
} else {
$discount = 0;
}

$total=$price-$discount;

echo"ราคาสินค้ารวม = ".number_format($price,2)." บาท <br>";
echo"ส่วนลดที่ได้รับ = ".number_format($discount,2)." บาท <br>" ;
echo"จำนวนเงินที่จ่ายจริง = ".number_format($total,2)." บาท <br>" ;
}
?>

</body>
</html>