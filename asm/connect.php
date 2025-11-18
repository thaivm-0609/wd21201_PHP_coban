<?php 
//khai báo kết nối cơ sở dữ liệu
$serverName = 'localhost'; //host-servername: localhost
$dbName = 'wd21201_php'; //dbname
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
    //cài đặt dữ liệu  trả về
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed".$e->getMessage();
}

?>
