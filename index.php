<?php 
//comment 1 dòng đơn
/**
 * sử dụng 
 * comment
 * cho 
 * nhiều 
 * dòng
 */
$a = '10'; //khai báo biến a;
$b = 10; //khai báo biến b và gán giá trị
$c;

const PI = 3.14; //Hằng số BẮT BUỘC phải gán giá trị kkhi khởi tạo

// echo $a == $b;
// var_dump(gettype($b));
// // var_dump($a == $b);
// // var_dump($a === $b);
// die;

//khởi tạo (khai báo hàm)
function tinhTong($a, $b) {
    echo $a+$b;
}

function tinhHieu($a, $b) {
    echo $a - $b;
}

/**
 * function tenHam(params) {
 *      code logic
 *      return;
 * }
 * 
 * Phân loại hàm:
 *      - Có tham số truyền vào hay không? => cặp () khi khởi tạo hàm
 *      - Có giá trị trả về hay không? => dựa vào từ khóa return 
 */


/**Cấu trúc điều khiển
 * if (điều kiện) {
 *      code logic nếu điều kiện đúng (true)
 * } else {
 *      code logic nếu điều kiện sai (false)
 * } 
 */

function checkEvenOdd($number) {
    //cú pháp if else đầy đủ
    if ($number%2 == 0) { //% phép chia lấy dư
        echo $number." là số chẵn";
    } else {
        echo $number." là số lẻ";
    }

    //toán tử 3 ngôi: $tenBien = (đk) ? giá trị nếu đk đúng : giá trị nếu đk sai
    $result = $number%2 == 0 ? 'chẵn' : 'lẻ';
    echo $number."là số".$result;
}

function giaiPTB2($a,$b,$c) {
    $delta = $b*$b - 4*$a*$c;
    if ($delta < 0) { //nếu delta < 0 => vô nghiệm
        echo "PT vô nghiệm";
    } else if ($delta == 0) {
        $x = -$b/(2*$a);
        echo "PT có nghiệm kép x1=x2=".$x;
    } else {
        $x1 = (-$b - sqrt($delta))/(2*$a);
        $x2 = (-$b + sqrt($delta))/(2*$a);
        echo "PT có 2 nghiệm phân biệt x1= ".$x1." và x2=".$x2;
    }
}


?>