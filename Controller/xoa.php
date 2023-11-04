<?php
include"../db/connect.php";
 $this_id = $_GET['this_id'];
 $sql = "SELECT * FROM sanpham WHERE id='$this_id'";
 $result = mysqli_query($mysqli,$sql);
 $row = mysqli_fetch_assoc($result);
 $image_path = "../img/". $row['anh'];
 // Xóa ảnh từ thư mục
 if (file_exists($image_path)) {
    unlink($image_path);
 }
 // xóa trong db    
 $delete_sql = "DELETE FROM sanpham WHERE id='$this_id'";
 mysqli_query($mysqli, $delete_sql);
?>
<script>
    window.location.href = "../view/homeadmin.php";
    alert("Dữ liệu đã được xóa.");
</script>