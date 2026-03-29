<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hoten = htmlspecialchars(trim($_POST['hoten'] ?? ''));
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    echo "Họ tên: $hoten<br>Email: $email<br>Phone: $phone";
} else
    echo "Phải gửi bằng POST.";
?>