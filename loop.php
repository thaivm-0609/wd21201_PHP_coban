<?php
/**Vòng lặp: xử lý các công việc lặp đi lặp lại
 * - for:
 * - foreach:
 * - while:
 * - do while:
 */

//for: for (giá trị khởi tạo; điều kiện dừng; bước nhảy);
//VD: in các số chẵn từ 1 đến 10
for ($i=1; $i<=10; $i++) {
    if($i%2 == 0) {
        echo $i.', ';
    }
}

//foreach: khi làm việc với mảng cần duyệt từng phần từ trong mảng
//foreach ($mang as $phanTu) {} 
//VD: mỗi phần tử trong mảng nhân lên 10 lần và echo ra
$array = [1,2,3,4,5];
foreach ($array as $i) {
    echo ($i*10).', ';
}

/**while - do while
 * while: kiểm tra điều kiện rồi mới chạy code
 * while (đk) {
 *  code thực thi
 * }
 * 
 * do while: chạy xong mới kiểm tra điều kiện
 * do {
 *  code thực thi 
 * } while (đk)
*/
?>
