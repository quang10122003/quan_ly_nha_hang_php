
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="./csshomeadmin.css">
</head>

<body>
    <div class="nav">
        <div class="nav1">
            <a href="./homeadmin.php">
                <img src="../img/pngtree-restaurant-logo-design-vector-template-png-image_5441058.jpg" alt="">
            </a>
            <a href="./homeadmin.php">quản lý menu</a>
            <a href="./quan_ly_nha_vien.php">quản lý nhân viên</a>
        </div>
        <div class="nav2">
            <p class="icon2">admin</p>
            <i style="margin-right: 50px;" class="bi bi-person-circle icon2"></i>
        </div>
    </div>
    <div class="khuyenmai">
        <div class="khuyenmai_title">
            <i class="bi bi-fire"></i>
            <h2 id="h2Khuyenmai">danh sách nhân viên </h2>
            <form action="them_nhan_vien.php">
                <button>THÊM NHÂN VIÊN</button>
            </form>
        </div>
        <div style="display:flex" class="boc">
            <div class="khuyenmai_contemt">
                <?php
                    include "../db/connect.php";
                    $sql = "SELECT * FROM user WHERE quyen = 'user';";
                    $result = mysqli_query($mysqli, $sql);
                    while ($row = mysqli_fetch_array($result)) {

                ?>
                    <div id="the" class="card">
                        <a href="">
                            <img style="width: 70%; display: block; margin: 10px auto;"
                                src="../img/<?php echo $row['anh']?>" class="card-img-top" alt=""> 
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;color: #D72548;">
                                    <?php echo $row['ten']?>
                                </h5>
                            </div>
                        </a>
                        <p class="card-text" style="text-align: center; font-size: 17px;">ngày vào làm:
                            <?php echo $row['ngay_lam']?>
                        </p>
                        <p class="card-text" style="text-align: center; font-size: 17px; color:#BF98A0">lương:
                            <?php echo $row['luong']?>
                        </p>
                        <p style="text-align: center;"><a href="../view/edit_nhan_vien_view.php?this_anh=<?php echo$row['anh']?>&this_ten=<?php echo$row['ten']?>&this_ngay_vao_lam=<?php echo$row['ngay_lam']?>&this_id=<?php echo$row['id']?>&this_luong=<?php echo$row['luong']?>" class="btn btn-primary"
                                style="border-radius: 20px; width:130px; padding-left: 25px;padding-right: 25px;background-color: #BF98A0;">
                                SỬA</a>
                        </p>
                        <p style="text-align: center;"><a href="../Controller/xoa_nv.php?this_id=<?php echo$row['id']?>" class="btn btn-primary"
                                style="border-radius: 20px; width:130px; padding-left: 25px;padding-right: 25px;background-color: #BF98A0;">
                                XÓA</a>
                        </p>
                    </div>
                <?php
                }
                ?>
            
        </div>

    </div>
    <script src="../js/javascrip.js"></script>
</body>

</html>