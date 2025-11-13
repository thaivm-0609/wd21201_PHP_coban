<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Vòng lặp for tăng
$count=10;
for($i=1;$i<10;$i++){
    echo"$i<br>";
}
//Tính tổng S =1+2+3+4+5+6+7+....n
$n=10;
$s=0;
for($i=1;$i<=$n;$i++){
    $s+=$i; // s=s+i
}
echo'Tổng S = '.$s;
//Vòng lặp for giảm thì ngược lại

//Bài tập về nhà
//Viêt hàm fibonacci với số lượng muốn in ra
function inFibonacci($n){
$a = 0;
$b = 1;
$chuoi = "";
for($i = 0; $i < $n;$i++){
$chuoi = $a . "";
$temp = $a + $b;
$a = $b;
$b = $temp;
}
echo "chuỗi Fibonacci:". trim($chuoi);
}
inFibonacci(15);



?>
    
</body>
</html>