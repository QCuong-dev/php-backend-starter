<?php
if (isset($_GET['ban-kinh']) && is_numeric($_GET['ban-kinh'])) {
    $bankinh = (float) $_GET['ban-kinh'];
    $chuvi = 2 * pi() * $bankinh;
    $dientich = pi() * $bankinh * $bankinh;
    echo "ban kinh $bankinh<br>";
    echo "Chu vi: " . round($chuvi, 4) . "<br>";
    echo "Dien tich: " . round($dientich, 4);
} else {
    echo "Vui long nhap ban kinh hop le";
}
?>