<?php
require_once './connect.php';

//B1: lấy dữ liệu từ DB để hiển thị ra form
if (isset($_GET['id']) && $_GET['id']>0) {
    //B1.1: lấy bản ghi product dựa theo id
    $id = $_GET['id'];
    $product = $conn->query("SELECT * FROM products WHERE id='$id'")->fetch();
    //B1.2: lấy danh sách categories
    $categories = $conn->query("SELECT * FROM categories")->fetchAll();

    //B2: gửi dữ liệu lên server để cập nhật bản ghi
    if (isset($_POST['submit'])) {
        //B2.1: lấy dữ liệu từ form
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $categoryId = $_POST['category_id'];
        //B2.2: khai báo câu truy vấn
        $sql = "UPDATE products 
            SET name='$name', price='$price', image='$image', 
                description='$description', category_id='$categoryId'
            WHERE id='$id'";
        $conn->exec($sql);
        //B2.3: điều hướng ng dùng về trang danh sách
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
    <h1>Đây là trang chỉnh sửa</h1>
        <form action="./edit.php?id=<?= $product['id'] ?>" method="POST">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="<?= $product['name'] ?>">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="price" value="<?= $product['price'] ?>">
        </div>
        <div>
            <label for="">Image</label>
            <input type="text" name="image" value="<?= $product['image'] ?>">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" value="<?= $product['description'] ?>">
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="">
                <?php foreach ($categories as $c) { ?>
                    <?php if ($product['category_id'] == $c['id']) { ?> 
                        <option selected value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                    <?php } else { ?>
                        <option value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>