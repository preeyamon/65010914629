<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น (ฟุ้กกี้)</title>
</head>

<body>

	<h1>สมัครสมาชิกครอบครัวน้องแฮม</h1>
    <form method="post" action="">
     ชื่อ-สกุล<input type="text" name="Name" required autofocusS> <br>
     เพศ<input type="radio" name="gender" value="ชาย">ชาย
     	<input type="radio" name="gender" value="หญิง" checked>หญิง <br>
      ที่อยู่ <br>
    <textarea name="address" cols="29" rows="4"></textarea><br>
    เบอร์โทรศัพท์ <input type="text" name="phone"required> <br>
    ระดับการศึกษา 
    <select name="edu">
		<option value="ต่ำกว่าปริญญาตร">ต่ำกว่าปริญญาตรี</option>
		<option value="ปริญญาตร">ปริญญาตรี</option>
		<option value="ปริญญาโท">ปริญญาโท</option>
		<option value="ปริญญาเอก">ปริญญาเอก</option>
		</select> <br>
	สายพันธุ์แฮมเตอร์ที่ชอบ  
    <input type="checkbox" name="a[]" value="ไจแอนท์"checked> ไจแอนท์
	<input type="checkbox" name="a[]" value="วินเทอร์ไวท์">วินเทอร์ไวท์
	<input type="checkbox" name="a[]" value="แคมเบลล์"> แคมเบลล์
	<input type="checkbox" name="a[]" value="โรโบรอฟสกี้"> โรโบรอฟสกี้  <br>
	username<input type="text" name="Uname" required> <br>
    password <input type="password" name="pwd" size="20" maxlength="10">
    
    
     <button type="submit" name="Submit">สมัครสมาชิก </button>
     <button type="reset">ยกเลิก </button>
     <button type="button" onClick="window.print();">พิมพ์ </button> 
   </form>
  <hr>
    
<?php
if(isset($_POST['Submit'])){
	echo "ชื่อ-สกุล: ".$_POST['Name']."<br>";
	echo "เพศ: ".$_POST['gender']."<br>";
	echo "ที่อยู่: ".$_POST['address']."<br>";
	echo "เบอร์โทรศัพท์: ".$_POST['phone']."<br>";
	echo "ระดับการศึกษา: ".$_POST['edu']."<br>";
	echo "สายพันธุ์แฮมเตอร์ที่ชอบ: ";
	if(isset($_POST['a'])){
	foreach($_POST['a']as $Hamster){
		echo "<li>" .htmlspecialchars($Hamster)."</li>";
	}
}
	echo "Username: ".$_POST['Uname']."<br>";
	echo "Password: ".$_POST['pwd']."<br>";
}
?> 
</body>
</html>