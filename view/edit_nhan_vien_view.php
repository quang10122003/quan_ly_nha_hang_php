<?php 
$this_id = $_GET['this_id'];
$this_anh = $_GET['this_anh'];
$this_ten = $_GET['this_ten'];
$this_ngay_vao_lam = $_GET['this_ngay_vao_lam'];
$this_luong = $_GET['this_luong'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them món ăn</title>
    <link rel="stylesheet" href="./edit_mon_an.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" />
</head>
<body>
    <div class="form">
        <h3 id="h3sanpham">nhân viên: <?php echo $this_ten?></h3>
        <form action="../Controller/edit_nhan_vien.php" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraForm4()">
            <div style="width: 100%; text-align:center" >
                <img src="../img/<?php echo $this_anh?>"  alt="" style="height: 150px;">
            </div>
            <br>
            <input style="display:none" id="ip7" type="text" name ="id" value="<?php echo $this_id?>">
            <span>mời bạn chọn ảnh:</span>
            <input id="ip1" type="file" name="anh">
            <br>
            <span>nhập tên nhân viên:</span>
            <input id="ip2" type="text" name ="ten_nhan_vien" value="<?php echo $this_ten?>">
            <br>
            <span>nhập ngày vào làm việc:</span>
            <input id="ip3" type="text" name="ngay_vao" value="<?php echo $this_ngay_vao_lam?>">
            <br>
            <span>nhập giá sản phẩm:</span>
            <input id="ip4" type="text" name ="luong" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php echo $this_luong?>" >
            <br>
            <button id="btn1" name="btn_edit">SỬA</button>
            <button id="btn2" name="btn_huy" onclick="quayLaiTrang2(event)">HỦY</button>
        </form>
    </div>
    <script src="../js/javascrip.js?v= <?php echo time(); ?>"></script>
</body>
</html>