<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie lưu trữ tên người dùng và số điện thoại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $user = $_POST['username'];
            $phone = $_POST['phone'];

            //thiết lập cookie
            setcookie('username',$user,time()+10);
            setcookie('phone',$phone,time()+10);
        }
    ?>
    <div class="container">
        <h1 class="mt-5">Nhập thông tin người dùng</h1>

        <!-- Form nhập tên người dùng và số điện thoại -->
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Tên người dùng:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>

        <hr>

        <h3 class="mt-5">Thông tin từ Cookie:</h3>
    <?php
        if(isset($_COOKIE['username']) && isset($_COOKIE['phone'])){
            echo "Cookie tồn tại!<br>";
            echo "Tên người dùng: " . $_COOKIE['username'] . "<br>";
            echo "Số điện thoại: " . $_COOKIE['phone'] . "<br>";
        } else {
            echo "Cookie không tồn tại hoặc đã hết hạn.<br>";
        }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hàm để đọc cookie theo tên
        function getCookie(name) {
            let cookieArr = document.cookie.split(";");
            for (let i = 0; i < cookieArr.length; i++) {
                let cookie = cookieArr[i].trim();
                if (cookie.startsWith(name + "=")) {
                    return cookie.substring(name.length + 1);
                }
            }
            return null;
        }

        // Kiểm tra cookie 'username' và 'phone' sau 10 giây
        setTimeout(function() {
            let username = getCookie('username');
            let phone = getCookie('phone');
            
            if (username && phone) {
                alert("Cookie vẫn tồn tại sau 10 giây.\nTên người dùng: " + username + "\nSố điện thoại: " + phone);
            } else {
                alert("Cookie đã hết hạn sau 10 giây.");
            }
        }, 10000);  // Đợi 10 giây (10.000 milliseconds)
        </script>
</body>
</html>