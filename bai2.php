<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        h1 { color: #2980b9; border-bottom: 2px solid #2980b9; display: inline-block; }
        h2 { color: #c0392b; }
        .info-label { font-weight: bold; }
        .price { color: #27ae60; font-size: 1.2em; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Thông tin tour du lịch</h1>

    <?php
        // 1. Khai báo và gán giá trị cho các biến
        $tenTour = "Tour Đà Lạt 3 ngày 2 đêm";
        $diemDen = "Đà Lạt";
        $soNgay = 3;
        $soDem = 2;
        $giaTour = 3200000;
    ?>

    <h2><?php echo $tenTour; ?></h2>
    
    <p><span class="info-label">Điểm đến:</span> <?php echo $diemDen; ?></p>
    
    <p><span class="info-label">Thời lượng:</span> 
        <?php echo $soNgay . " ngày " . $soDem . " đêm"; ?>
    </p>
    
    <p><span class="info-label">Giá tour:</span> 
        <span class="price"><?php echo number_format($giaTour, 0, ',', '.'); ?> VNĐ</span>
    </p>

</body>
</html><!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        h1 { color: #2980b9; border-bottom: 2px solid #2980b9; display: inline-block; }
        h2 { color: #c0392b; }
        .info-label { font-weight: bold; }
        .price { color: #27ae60; font-size: 1.2em; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Thông tin tour du lịch</h1>

    <?php
        // 1. Khai báo và gán giá trị cho các biến
        $tenTour = "Tour Đà Lạt 3 ngày 2 đêm";
        $diemDen = "Đà Lạt";
        $soNgay = 3;
        $soDem = 2;
        $giaTour = 3200000;
    ?>

    <h2><?php echo $tenTour; ?></h2>
    
    <p><span class="info-label">Điểm đến:</span> <?php echo $diemDen; ?></p>
    
    <p><span class="info-label">Thời lượng:</span> 
        <?php echo $soNgay . " ngày " . $soDem . " đêm"; ?>
    </p>
    
    <p><span class="info-label">Giá tour:</span> 
        <span class="price"><?php echo number_format($giaTour, 0, ',', '.'); ?> VNĐ</span>
    </p>

</body>
</html>