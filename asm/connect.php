<?php 
//khai báo kết nối cơ sở dữ liệu
$serverName = 'localhost'; //host-servername: localhost
$dbName = 'wd21201'; //dbname
$userName = 'root'; //username
$password = '';//password
try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$dbName",
        $userName,
        $password
    );
    //cài đặt hiển thị lỗi 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed".$e->getMessage();
}

?>
