<?php
    if (isset($_POST['submit'])) { //kiểm tra ng dùng bấm nút submit hay chưa?
        $a = $_POST['a'];
        $b = $_POST['b'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                echo $a+$b; //code logic với trường hợp cộng
                break;
            case '-': 
                echo $a - $b;
                break;
            case '*': 
                echo $a * $b;
                break;
            case '/': 
                if ($b == 0) {
                    echo "Không thể chia cho 0";
                } else {
                    echo $a/$b;
                }
                break;
            default: 
                echo "Something went wrong";
                break;
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
    <form action="./demo_switch.php" method="POST">
        <div>
            <label for="">Nhập số a</label>
            <input type="number" name="a" required>
        </div>
        <div>
            <label for="">Nhập số b</label>
            <input type="number" name="b" required>
        </div>
        <div>
            <label for="">Phép tính</label>
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Tính">
    </form>
</body>
</html>