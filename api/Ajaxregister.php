<?php
include_once "../config.php";
session_start(); // Khởi động phiên làm việc (session) nếu chưa được khởi động

$user = $_POST["user"]; // Sử dụng dấu ngoặc vuông [] thay vì dấu ()
$pass = $_POST["pass"];
$repass = $_POST["repass"];

if ($pass != $repass) {
    echo "Hai mật khẩu không khớp";
} else {
    try {
        $stmt = $dbh->prepare("INSERT INTO users (username, password) VALUES (:user, :password)"); // Sử dụng VALUES thay vì VALUE
        $stmt->bindParam(':user', $user); // Điều chỉnh tên tham số thành ':user'
        $stmt->bindParam(':password', $pass); // Điều chỉnh tên tham số thành ':password'
        $stmt->execute();
        $_SESSION['user'] = $user;
        echo "success";
    } catch (Exception $e) {
        echo "Lỗi đăng ký " . $e->getMessage(); // Sử dụng $e->getMessage() để hiển thị thông báo lỗi chi tiết
    }
}
?>
