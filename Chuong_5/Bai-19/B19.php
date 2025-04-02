<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Chào bạn!";
        if(isset($_COOKIE['thoiGianTruyCap'])){
            echo "thời gian truy cập gần đây nhất là: ".date('d/m/Y H:i:s', $_COOKIE['thoiGianTruyCap']);
            setcookie('thoiGianTruyCap',time(),time()+600);
        }else{
            setcookie('thoiGianTruyCap',time(),time()+600);
        }
    ?>
</body>
</html>