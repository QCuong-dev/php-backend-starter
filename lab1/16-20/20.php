<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name-a'])) {
    setcookie('name-cookies', $_POST['name-a'], time() + 10, '/');
    header('Location: 20.php');
    exit;
}
if (isset($_COOKIE['name-cookies'])) {
    echo "Chao mung ban " . htmlspecialchars($_COOKIE['name-cookies']) . "!";
} else {
    ?>
    <form method="post">
        Nhap ten de ghi nho: <input type="text" name="name-a"><br>
        <input type="submit" value="Lưu">
    </form>
    <?php
}