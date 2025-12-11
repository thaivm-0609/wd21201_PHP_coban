<?php

session_start(); //để sử dụng $_SESSION
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '123456') {
        $_SESSION['username'] = $username;

        header('location: hotel.php');
    } else {
        echo "Thông tin đăng nhập không hợp lệ";
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
    <form action="" method="POST">
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="submit">Đăng nhập</button>
    </form>
</body>
</html>