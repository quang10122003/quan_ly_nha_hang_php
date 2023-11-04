<?php
    require '../db/connect.php';
    session_start();
    if(isset($_POST['submit']) && $_POST["user"] !='' &&  $_POST["password"]!=''){
        // thực hiện sử lý khi người dùng điền đầy đủ thông tin và submit
        $username = $_POST["user"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM user WHERE name ='$username' AND pass ='$password'";
        $result = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row){
            $_SESSION['login'] = $row['quyen'];
            header("location:../view/homeadmin.php");
        }else{
            header("location:../view/dang_nhap.php");
        }
    }else{
        header("location:../view/dang_nhap.php");
        
    }
?>