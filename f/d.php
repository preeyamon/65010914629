<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
 <h1>ปรีญามล พลเกิ้น(ฟุ้กกี้)</h1>
 <form method="post" action="">
คะแนน <input type="number" name="A" min="0" max="100" autofocus required>
<button type="submit" name="Submit" >OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
 $score = $_POST['A']; 
if ($score >= 80) {
$grade = "A" ;
} else if ($score >= 70) {
$grade = "B" ;
} else if ($score >= 60) {
$grade = "C" ;
} else if ($score >= 50) {
$grade = "D" ;
} else {
$grade = "F" ;
}
echo"คะแนน $score ได้เกรด $grade" ;
}
?>

</body>
</html>