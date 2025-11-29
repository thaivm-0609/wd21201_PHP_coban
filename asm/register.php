<?php
require_once './connect.php';

if (isset($_POST['submit'])) {
    //B1: lấy dữ liệu ng dùng nhập vào form
    $email = $_POST['email'];
    $password = $_POST['password'];
    //B2: kiểm tra email đã tồn tại hay chưa?
    $existedEmail = $conn->query("SELECT * 
        FROM users 
        WHERE email='$email'")->fetch();
    if (!$existedEmail) {
        //B2: mã hóa password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        //B3: lưu tài khoản ng dùng nhập vào db
        $sql = "INSERT INTO users (email, password)
            VALUE ('$email', '$hashedPassword')";
        $conn->exec($sql);
        header('location: index.php');
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
    <form action="./register.php" method="POST">
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="submit">Đăng ký</button>
    </form>
</body>
</html>