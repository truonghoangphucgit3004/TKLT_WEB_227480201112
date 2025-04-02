<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma trận 2 chiều</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Đảm bảo chiều cao của trang đủ để căn giữa */
    }

    table {
        margin-top: 20px; /* Thêm khoảng cách giữa bảng và các phần tử phía trên */
        text-align: center;
        border-collapse: collapse; /* Đảm bảo viền không bị gãy */
    }

    td {
        width: 30px;
        height: 30px;
        border: 1px solid green;
    }

    .container {
        text-align: center; /* Căn giữa toàn bộ nội dung trong container */
    }
</style>
<body>
    <div class="container">
        <h1 class="mt-5">Nhập ma trận 2 chiều</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="rows" class="form-label">Số hàng:</label>
                <input type="number" id="rows" name="rows" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cols" class="form-label">Số cột:</label>
                <input type="number" id="cols" name="cols" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tạo ma trận</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = $_POST["rows"];
                $cols = $_POST["cols"];
                $matrix = [];

                // Tạo ma trận ngẫu nhiên từ 1 đến 100
                for ($i = 0; $i < $rows; $i++) {
                    for ($j = 0; $j < $cols; $j++) {
                        $matrix[$i][$j] = rand(1, 100);
                    }
                }

                // Hiển thị ma trận
                echo "<table class='table table-bordered text-center'>";
                for ($i = 0; $i < $rows; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $cols; $j++) {
                        echo "<td>" . $matrix[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";

                // Tính toán số lớn nhất, nhỏ nhất và tổng các số trong ma trận
                $max = $matrix[0][0];
                $min = $matrix[0][0];
                $sum = 0;

                for ($i = 0; $i < $rows; $i++) {
                    for ($j = 0; $j < $cols; $j++) {
                        if ($matrix[$i][$j] > $max) {
                            $max = $matrix[$i][$j];
                        }
                        if ($matrix[$i][$j] < $min) {
                            $min = $matrix[$i][$j];
                        }
                        $sum += $matrix[$i][$j];
                    }
                }

                // Hiển thị kết quả
                echo "<h3 class='mt-5'>Kết quả:</h3>";
                echo "<p>Số lớn nhất: $max</p>";
                echo "<p>Số nhỏ nhất: $min</p>";
                echo "<p>Tổng các số trong ma trận: $sum</p>";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
