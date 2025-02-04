<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรีญามล พลเกิ้น(ฟุ้กกี้)</title>
</head>

<body>
 <h1>ปรีญามล พลเกิ้น(ฟุ้กกี้)</h1>
 <?php
 $student1 = 75 ;
 $student2 = 60 ;
 $student3 = 82 ;
 $student4 = 59 ;
 $student5 = 64 ;
 
 $sum = $student1+$student2+$student3+$student4+$student5;
 
 $avg = $sum/5 ;
 
 echo "นิสิตคนที่1 ได้ {$student1} คะแนน<br>";
 echo "นิสิตคนที่2 ได้ {$student2} คะแนน<br>";
 echo "นิสิตคนที่3 ได้ {$student3} คะแนน<br>";
 echo "นิสิตคนที่4 ได้ {$student4} คะแนน<br>";
 echo "นิสิตคนที่5 ได้ {$student5} คะแนน<br>";
 
 echo "ผลรวมของคะแนนสอบของนิสิตทุกคน = {$sum} คะแนน<br>";
 
 echo "คะแนนเฉลี่ยของนิสิตทั้ง 5 คน = {$avg} คะแนน<hr>";
?>
</body>
</html>