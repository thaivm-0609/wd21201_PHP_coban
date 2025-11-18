<?php
require_once './connect.php';

//kiểm tra có id truyền lên URL hay không VÀ giá trị id > 0
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'"; //khai báo câu truy vấn
    $conn->exec($sql); //thực thi câu truy vấn

    header('location: index.php'); //điều hướng người dùng về trang danh sách
}
?>
