<?php
include"../db/connect.php";
$this_id = $_POST['id'];
$sql = "SELECT * FROM sanpham WHERE id='$this_id'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($query);
if(isset($_POST['btn_edit'])){
    $image = $_FILES['anh']['name'];
    $tmp_image = $_FILES['anh']['tmp_name'];
    $ten = $_POST['tensp'];
    $mota = $_POST['motasp'];
    $gia = $_POST['giasp'];
    $sql =  "UPDATE sanpham SET anh='$image',ten='$ten',mota='$mota',gia='$gia' WHERE id='$this_id'";
    mysqli_query($mysqli, $sql);
    move_uploaded_file($tmp_image,'../img/'.$image);
}
?>
<script>
    window.location.href = "../view/homeadmin.php";
    alert("Đã hoàn thành chỉnh sửa");
</script>