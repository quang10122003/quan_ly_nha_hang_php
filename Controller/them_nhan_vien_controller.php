<?php 
    include"../db/connect.php";
    if(isset($_POST["btn_them"])){
        $image = $_FILES['anh']['name'];
        $tmp_image =  $_FILES['anh']['tmp_name'];
        $ten = $_POST['ten_nhan_vien'];
        $char_map = array(
            'á' => 'a', 'à' => 'a', 'ả' => 'a', 'ã' => 'a', 'ạ' => 'a',
            'â' => 'a', 'ấ' => 'a', 'ầ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ậ' => 'a',
            'ă' => 'a', 'ắ' => 'a', 'ằ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a',
            'é' => 'e', 'è' => 'e', 'ẻ' => 'e', 'ẽ' => 'e', 'ẹ' => 'e',
            'ê' => 'e', 'ế' => 'e', 'ề' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e',
            'í' => 'i', 'ì' => 'i', 'ỉ' => 'i', 'ĩ' => 'i', 'ị' => 'i',
            'ó' => 'o', 'ò' => 'o', 'ỏ' => 'o', 'õ' => 'o', 'ọ' => 'o',
            'ô' => 'o', 'ố' => 'o', 'ồ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o',
            'ơ' => 'o', 'ớ' => 'o', 'ờ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o',
            'ú' => 'u', 'ù' => 'u', 'ủ' => 'u', 'ũ' => 'u', 'ụ' => 'u',
            'ư' => 'u', 'ứ' => 'u', 'ừ' => 'u', 'ử' => 'u', 'ữ' => 'u', 'ự' => 'u',
            'ý' => 'y', 'ỳ' => 'y', 'ỷ' => 'y', 'ỹ' => 'y', 'ỵ' => 'y',
            'đ' => 'd',
            ' ' => ''
        );
        $tendangnhap = strtr(mb_strtolower($ten, 'UTF-8'), $char_map);
// Loại bỏ các ký tự đặc biệt và khoảng trắng
        $tendangnhap = preg_replace('/[^a-zA-Z0-9]/', '', $tendangnhap);

// Chuyển thành chữ thường
        $tendangnhap = strtolower($tendangnhap);
        $tendangnhap = $tendangnhap."@gmail.com";
        $ngayvaolam = $_POST['ngay_vao_lam'];
        $luong = $_POST['luong'];
        $pass = random_int(10000,99999);
        $sql = "INSERT INTO user (anh,ten,ngay_lam,luong,name,pass,quyen) VALUE('$image','$ten','$ngayvaolam','$luong','$tendangnhap','$pass','user')";
        mysqli_query($mysqli,$sql);
        move_uploaded_file($tmp_image,'../img/'.$image);
}
?>
<script>
    window.location.href = "../view/quan_ly_nha_vien.php";
    alert('Mật khẩu của bạn là: <?php echo $pass; ?>');
</script>