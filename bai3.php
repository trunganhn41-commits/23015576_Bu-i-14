<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính toán Tour</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        .result-box { border: 1px solid #ddd; padding: 20px; border-radius: 8px; background-color: #f9f9f9; width: fit-content; }
        .error { color: red; font-weight: bold; }
        .total { color: #2c3e50; font-size: 1.2em; font-weight: bold; }
        .type { color: #8e44ad; font-style: italic; }
    </style>
</head>
<body>

    <h1>CHI TIẾT THANH TOÁN TOUR</h1>

    <div class="result-box">
        <?php
            // Khai báo biến
            $tenTour = "Tour Phú Quốc nghỉ dưỡng";
            $giaTour = 4500000;
            $soNguoi = 4;

            // Xử lý logic
            if ($soNguoi <= 0) {
                echo "<p class='error'>Số người không hợp lệ!</p>";
            } else {
                // Tính tổng tiền
                $tongTien = $giaTour * $soNguoi;

                // Phân loại tour dựa trên $giaTour
                $phanLoai = "";
                if ($giaTour < 2000000) {
                    $phanLoai = "Tour tiết kiệm";
                } elseif ($giaTour <= 4000000) {
                    $phanLoai = "Tour tiêu chuẩn";
                } else {
                    $phanLoai = "Tour cao cấp";
                }

                // Hiển thị kết quả
                echo "<p><strong>Tên tour:</strong> $tenTour</p>";
                echo "<p><strong>Giá tour:</strong> " . number_format($giaTour, 0, ',', '.') . " VNĐ</p>";
                echo "<p><strong>Số người:</strong> $soNguoi</p>";
                echo "<hr>";
                echo "<p class='total'>Tổng tiền: " . number_format($tongTien, 0, ',', '.') . " VNĐ</p>";
                echo "<p class='type'>Phân loại: $phanLoai</p>";
            }
        ?>
    </div>

</body>
</html>