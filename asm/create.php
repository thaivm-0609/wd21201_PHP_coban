<?php 
require_once './connect.php';

//lấy danh sách category để hiện thị ô select
$categories = $conn->query("SELECT * FROM categories")->fetchAll();

//lấy dữ liệu từ form, lưu vào trong database
if (isset($_POST['submit'])) {
    //B1: lấy dữ liệu từ form $_POST['input_name']
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $categoryId = $_POST['category_id'];
    //B2: khai báo câu truy vấn
    $sql = "INSERT INTO products 
        (name, price, image, description, category_id) 
        VALUES ('$name', '$price', '$image', '$description', '$categoryId')";
    $conn->exec($sql); //thực thi câu truy vấn
    //B3: điều hướng người dùng về trang danh sách
    header('location: index.php');
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
    <h1>Đây là trang thêm mới sản phẩm</h1>
    <form action="./create.php" method="POST">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="">Image</label>
            <input type="text" name="image">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="">
                <?php foreach ($categories as $c) { ?>
                    <option value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" name="submit">Create</button>
    </form>
</body>
</html>