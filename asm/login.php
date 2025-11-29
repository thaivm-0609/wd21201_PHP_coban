<?php
require_once './connect.php';

session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //tìm user có email trùng với email nhập vào form
    $user = $conn->query("SELECT * 
        FROM users 
        WHERE email='$email'")->fetch();
    if (isset($user)) { //nếu tồn tại bản ghi trùng vs email nhập vào
        //so sánh password người dùng nhập vào với password mã hóa lưu trong db
        $checkPassword = password_verify($password, $user['password']); 
        if ($checkPassword) { //nếu password trùng khớp
            $_SESSION['user'] = $user; //lưu thông tin người dùng vào session
            header('location: index.php'); //điều hướng người dùng về trang danh sách
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="./login.php" method="POST">
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="submit">Đăng nhập</button>
    </form>
</body>
</html>