<?php 
require_once './connect.php';

//B1: lấy giá trị id truyền qua URL
$id = $_GET['id'];
//B2: truy vấn dữ liệu từ DB
//lấy 1 bản ghi duy nhất dựa vào id => sử dụng hàm fetch();
// $product = $conn->query("SELECT * FROM products WHERE id='$id'")->fetch();
$product = $conn->query("SELECT products.*, categories.name AS cate_name
    FROM products
    JOIN categories
    ON products.category_id = categories.id
    WHERE products.id='$id'")->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /**
     * Để hiển thị giá trị của biến php trong html 
     * <?php echo $tenBien['tenTruong'] ?> hoặc <?= $tenBien['tenTruong'] ?>
     */
    ?>
    <h1>ID: <?= $product['id'] ?></h1>
    <h1>Name: <?= $product['name'] ?></h1>
    <h1>Description: <?= $product['description'] ?></h1>
    <h1>Price: <?= $product['price'] ?></h1>
    <h1>Image</h1>
    <img src="<?= $product['image'] ?>" alt="">
    <h1>Category: <?= $product['cate_name'] ?></h1>
</body>
</html>