<?php
if (isset($_FILES['avatar'])) {
    $f = $_FILES['avatar'];
    if ($f['error'] === 0) {
        $ext = pathinfo($f['name'], PATHINFO_EXTENSION); // Lay duoi file
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($ext), $allowed)) { //so sanh gia tri
            echo "Chỉ cho phép ảnh.";
            exit;
        }
        $target = basename($f['name']); //chi lay ten file hay vi duong dan
        if (move_uploaded_file($f['tmp_name'], $target)) {
            echo "Upload thành công!<br>";
            echo "<img src='$target' style='max-width :300px;'>";
        } else
            echo "Không thể di chuyển file.";
    } else
        echo "Lỗi upload: " . $f['error'];
} else
    echo "Không có file được gửi.";
?>