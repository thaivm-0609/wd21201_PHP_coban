<?php 
require_once './connect.php';

//truy vấn dữ liệu => gán cho biến $products
//lấy nhiều bản ghi => sử dụng hàm fetchAll();
$products = $conn->query("SELECT * FROM products")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách</h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Image</td>
                <td>Category</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $p) { ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['description'] ?></td>
                    <td><?= $p['price'] ?></td>
                    <td>
                        <img src="<?= $p['image'] ?>" alt="">
                    </td>
                    <td><?= $p['category_id'] ?></td>
                    <td>
                        <a href="./detail.php?id=<?= $p['id'] ?>">Detail</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>