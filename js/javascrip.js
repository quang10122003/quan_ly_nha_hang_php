function kiemTraForm() {
    var anh = document.getElementById("ip1").value;
    var ten = document.getElementById("ip2").value;
    var mota = document.getElementById("ip3").value;
    var gia = document.getElementById("ip4").value;

    if (anh === "" || ten === "" || mota === "" || gia === "") {
        alert("Vui lòng nhập đầy đủ thông tin.");
        return false; // Ngăn form được gửi đi
    }
    alert("đã thêm thành công món ăn");
    return true; // Cho phép form được gửi đi
}
function kiemTraForm2() {
    var anhInput = document.getElementById("ip1");
    var tenInput = document.getElementById("ip2");
    var motaInput = document.getElementById("ip3");
    var giaInput = document.getElementById("ip4");

    var anh = anhInput.value;
    var ten = tenInput.value;
    var mota = motaInput.value;
    var gia = giaInput.value;

    var anhInitial = anhInput.defaultValue;
    var tenInitial = tenInput.defaultValue;
    var motaInitial = motaInput.defaultValue;
    var giaInitial = giaInput.defaultValue;

    if (anh === anhInitial && ten === tenInitial && mota === motaInitial && gia === giaInitial) {
        alert("Thông tin chưa được chỉnh sửa");
        return false; // Ngăn form được gửi đi
    }

    if (anh === "" || ten === "" || mota === "" || gia === "") {
        alert("Vui lòng nhập đầy đủ thông tin.");
        return false; // Ngăn form được gửi đi
    }
    alert("đã sửa thành công món ăn");
    return true; // Cho phép form được gửi đi
}
function kiemTraForm3() {
    var anh = document.getElementById("ip1").value;
    var ten = document.getElementById("ip2").value;
    var mota = document.getElementById("ip3").value;
    var gia = document.getElementById("ip4").value;

    if (anh === "" || ten === "" || mota === "" || gia === "") {
        alert("Vui lòng nhập đầy đủ thông tin.");
        return false; // Ngăn form được gửi đi
    }
    alert("đã thêm thành công nhân viên");
    return true; // Cho phép form được gửi đi
}
function kiemTraForm4() {
    var anhInput = document.getElementById("ip1");
    var tenInput = document.getElementById("ip2");
    var ngayvaoInput = document.getElementById("ip3");
    var luongInput = document.getElementById("ip4");

    var anh = anhInput.value;
    var ten = tenInput.value;
    var ngay_vao = ngayvaoInput.value;
    var luong = luongInput.value;

    var anhInitial = anhInput.defaultValue;
    var tenInitial = tenInput.defaultValue;
    var ngayvaoInitial = motaInput.defaultValue;
    var luongInitial = giaInput.defaultValue;

    if (anh === anhInitial && ten === tenInitial && ngay_vao === ngayvaoInitial && luong === luongInitial) {
        alert("Thông tin chưa được chỉnh sửa");
        return false; // Ngăn form được gửi đi
    }

    if (anh === "" || ten === "" || mota === "" || gia === "") {
        alert("Vui lòng nhập đầy đủ thông tin.");
        return false; // Ngăn form được gửi đi
    }
    alert("đã sửa thành công nhân viên");
    return true; // Cho phép form được gửi đi
}
function quayLaiTrang(event) {
    event.preventDefault(); // Ngăn sự kiện mặc định của nút "HỦY" (không gửi form đi)
    window.location.href = "homeadmin.php";
}
function quayLaiTrang2(event) {
    event.preventDefault(); // Ngăn sự kiện mặc định của nút "HỦY" (không gửi form đi)
    window.location.href = "quan_ly_nha_vien.php";
}
function redirectToSpecificPage() {
    // Đường dẫn tới trang bạn muốn chuyển hướng
    var targetPage = "../view/home_nguoidung.php";

    // Chuyển hướng người dùng
    window.location.href = targetPage;
}







