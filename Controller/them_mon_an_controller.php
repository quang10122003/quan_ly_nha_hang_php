<?php 
    include"../db/connect.php";
    if(isset($_POST["btn_them"])){
        $image = $_FILES['anh']['name'];
        $tmp_image =  $_FILES['anh']['tmp_name'];
        $tensp = $_POST['tensp'];
        $motasp = $_POST['motasp'];
        $giasp = $_POST['giasp'];
        $sql = "INSERT INTO sanpham (anh,ten,mota,gia) VALUE('$image','$tensp','$motasp','$giasp')";
        mysqli_query($mysqli,$sql);
        move_uploaded_file($tmp_image,'../img/'.$image);
        header("Location:../view/homeadmin.php");
        exit(); 
}
?>