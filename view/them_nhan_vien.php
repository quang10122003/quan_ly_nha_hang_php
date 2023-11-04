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
        <form action="../Controller/them_nhan_vien_controller.php" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraForm3()">
            <span>mời bạn chọn ảnh:</span>
            <input id="ip1" type="file" name="anh">
            <br>
            <span>nhập tên nhân viên:</span>
            <input id="ip2" type="text" name ="ten_nhan_vien">
            <br>
            <span>ngày vào làm:</span>
            <input id="ip3" type="text" name="ngay_vao_lam">
            <br>
            <span>lương:</span>
            <input id="ip4" type="text" name="luong" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
            <br>
            <button id = "btn1"type="submit" name="btn_them">THÊM</button>
            <button id="btn2" name="btn_huy" onclick="quayLaiTrang2(event)">HỦY</button>
        </form>
    </div>
    <script src="../js/javascrip.js?v= <?php echo time(); ?>"></script>
</body>
</html>