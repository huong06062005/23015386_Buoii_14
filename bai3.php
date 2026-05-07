<<<<<<< HEAD
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính tiền và phân loại Tour</title>
</head>
<body>
    <h1>Chi tiết đặt tour</h1>
    <?php
        // Khai báo và gán giá trị
        $tenTour = "Tour Phú Quốc nghỉ dưỡng";
        $giaTour = 4500000;
        $soNguoi = 4;

        echo "<h2>$tenTour</h2>";
        echo "<p>Đơn giá: " . number_format($giaTour, 0, ',', '.') . " VNĐ/người</p>";
        echo "<p>Số lượng người: $soNguoi</p>";

        // Yêu cầu xử lý
        if ($soNguoi <= 0) {
            echo "<p style='color: red;'><strong>Số người không hợp lệ!</strong></p>";
        } else {
            // Tính tổng tiền
            $tongTien = $giaTour * $soNguoi;
            echo "<p><strong>Tổng tiền: " . number_format($tongTien, 0, ',', '.') . " VNĐ</strong></p>";
            
            // Phân loại tour theo giá
            $phanLoai = "";
            if ($giaTour < 2000000) {
                $phanLoai = "Tour tiết kiệm";
            } elseif ($giaTour >= 2000000 && $giaTour <= 4000000) {
                $phanLoai = "Tour tiêu chuẩn";
            } else { // Trên 4.000.000
                $phanLoai = "Tour cao cấp";
            }
            echo "<p>Phân loại: <strong>$phanLoai</strong></p>";
        }
    ?>
</body>
=======
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính tiền và phân loại Tour</title>
</head>
<body>
    <h1>Chi tiết đặt tour</h1>
    <?php
        // Khai báo và gán giá trị
        $tenTour = "Tour Phú Quốc nghỉ dưỡng";
        $giaTour = 4500000;
        $soNguoi = 4;

        echo "<h2>$tenTour</h2>";
        echo "<p>Đơn giá: " . number_format($giaTour, 0, ',', '.') . " VNĐ/người</p>";
        echo "<p>Số lượng người: $soNguoi</p>";

        // Yêu cầu xử lý
        if ($soNguoi <= 0) {
            echo "<p style='color: red;'><strong>Số người không hợp lệ!</strong></p>";
        } else {
            // Tính tổng tiền
            $tongTien = $giaTour * $soNguoi;
            echo "<p><strong>Tổng tiền: " . number_format($tongTien, 0, ',', '.') . " VNĐ</strong></p>";
            
            // Phân loại tour theo giá
            $phanLoai = "";
            if ($giaTour < 2000000) {
                $phanLoai = "Tour tiết kiệm";
            } elseif ($giaTour >= 2000000 && $giaTour <= 4000000) {
                $phanLoai = "Tour tiêu chuẩn";
            } else { // Trên 4.000.000
                $phanLoai = "Tour cao cấp";
            }
            echo "<p>Phân loại: <strong>$phanLoai</strong></p>";
        }
    ?>
</body>
>>>>>>> 48e6d2653449abca807c5ba76044a9dcca3a346f
</html>