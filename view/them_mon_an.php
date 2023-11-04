<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them món ăn</title>
    <link rel="stylesheet" href="./them_mon_an.css?v= <?php echo time(); ?>">
</head>
<body>
    <div class="form">
        <form action="../Controller/them_mon_an_controller.php" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraForm()">
            <span>mời bạn chọn ảnh:</span>
            <input id="ip1" type="file" name="anh">
            <br>
            <span>nhập tên sản phẩm:</span>
            <input id="ip2" type="text" name ="tensp">
            <br>
            <span>nhập mô tả sản phẩm:</span>
            <input id="ip3" type="text" name="motasp">
            <br>
            <span>nhập giá sản phẩm:</span>
            <input id="ip4" type="text" name ="giasp" >
            <br>
            <button id = "btn1"type="submit" name="btn_them">THÊM</button>
            <button id="btn2" name="btn_huy" onclick="quayLaiTrang(event)">HỦY</button>
        </form>
    </div>
    <script src="../js/javascrip.js?v= <?php echo time(); ?>"></script>
</body>
</html>