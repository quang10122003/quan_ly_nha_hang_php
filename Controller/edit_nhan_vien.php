<?php
include"../db/connect.php";
$this_id = $_POST['id'];
$sql = "SELECT * FROM user WHERE id='$this_id'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($query);
if(isset($_POST['btn_edit'])){
    $image = $_FILES['anh']['name'];
    $tmp_image = $_FILES['anh']['tmp_name'];
    $ten = $_POST['ten_nhan_vien'];
    $tendangnhap  = trim($ten);
    $tendangnhap = strtolower($ten);
    $tendangnhap = $tendangnhap."@gmail.com";
    $ngay_vao = $_POST['ngay_vao'];
    $luong = $_POST['luong'];
    $sql =  "UPDATE user SET anh='$image',ten='$ten',ngay_lam='$ngay_vao',luong='$luong',name='$tendangnhap' WHERE id='$this_id'";
    mysqli_query($mysqli, $sql);
    move_uploaded_file($tmp_image,'../img/'.$image);
}
?>
<script>
    window.location.href = "../view/quan_ly_nha_vien.php";
    alert("Đã hoàn thành chỉnh sửa");
</script>