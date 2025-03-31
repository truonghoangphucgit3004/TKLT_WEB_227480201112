<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Form.css" type="text/css">
    <title>Bai 5</title>
</head>
<body>
    <center>
        <div class="container">
            <div class="header">
                <h2>TÍNH USCLN VÀ BSCNN</h2>
                <hr>
            </div>
            <div class="content">
                <form>
                    <div class="item">
                       <div id="text1">
                        Số thứ 1: <input type="text" id="text1" name="t1">
                       </div> 
                        <div id="text2">
                            Số thứ 2: <input type="text" id="text2" name="t2">
                        </div>
                        <div id="text3">
                            Kết quả: &nbsp;<input type="text" id="textkq" name="kq" value="<?php echo htmlspecialchars($kq); ?>">
                        </div>   
                    </div>
                    <div class="submit">
                        <div id="sub1">
                            <input type="submit" value="USCLN" id="submit1" name="action">
                        </div>
                        <div id="sub2">
                            <input type="submit" value="BSCNN" id="submit2" name="action">
                        </div>
                    </div>
                </form>        
            </div>
        </div>
    </center>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'USCLN':
                        $so1 = $_GET["t1"];
                        $so2 = $_GET["t2"];
                        $kq = $so1 + $so2;
                        return $kq;
                        break;
                    case 'BSCNN':

                        break;
                }
            }
        }
    ?>
</body>
</html>