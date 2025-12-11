<?php
session_start();
$hotels = [
    //mỗi phần tử con là 1 mảng/bản ghi
    [
        'id' => 1,
        'name' => 'Hotel 1',
        'address' => 'Abc Xyz',
        'price_single_room' => 1000000,
        'price_double_room' => 1500000,
    ],
    [
        'id' => 2,
        'name' => 'Hotel 2',
        'address' => 'DEF',
        'price_single_room' => 2000000,
        'price_double_room' => 2500000,
    ],
    [
        'id' => 3,
        'name' => 'Hotel 3',
        'address' => 'GHI',
        'price_single_room' => 3000000,
        'price_double_room' => 4500000,
    ]
];

//tìm kiếm
if (isset($_GET['submit'])) {
    $keyword = $_GET['keyword']; //lấy từ khóa người dùng nhập vào ô tìm kiếm
    $results = []; //kết quả tìm kiếm

    foreach($hotels as $h) { //tìm phần tử có name/address khớp với keyword thì đẩy vào mảng $results
        //tìm kiếm tương đối
        if (strpos($h['name'], $keyword) || strpos($h['address'], $keyword)) {
            array_push($results, $h); //đẩy $h vào trong mảng $results
        }

        //tìm kiếm tuyệt đối
        // if ($h['name'] == $keyword || $h['address'] == $keyword) {
        //     $results[] = $h; //đẩy $h vào trong mảng $results
        // }
    }

    $hotels = $results;
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
    <?php if ($_SESSION['username']) { ?> 
        <p>Hello, <?= $_SESSION['username'] ?></p>
    <?php } ?>

    <h1>Tìm kiếm khách sạn</h1>
    <form action="" method="GET">
        <input type="text" name="keyword">
        <button type="submit" name="submit">Tìm kiếm</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Price Single Room</th>
                <th>Price Double Room</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $h) { ?> 
                <?php $total = $h['price_single_room'] + $h['price_double_room'] ?>
                <tr>
                    <td><?php echo $h['id'] ?></td>
                    <td><?= $h['name'] ?></td>
                    <td><?= $h['address'] ?></td>
                    <td><?= number_format($h['price_single_room']) ?></td>
                    <td><?= number_format($h['price_double_room']) ?></td>
                    <!-- <td><?php //number_format($h['price_single_room'] + $h['price_double_room']) ?></td> -->
                    <td><?= number_format($total) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
