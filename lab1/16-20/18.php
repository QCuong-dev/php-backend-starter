<?php
$danhSachSV = [
    ["ten" => "Nguyễn Văn A", "diem" => 8.5],
    ["ten" => "Trần Thị B", "diem" => 9.2],
    ["ten" => "Lê Văn C", "diem" => 7.8],
    ["ten" => "Cuong", "diem" => 10],
    ["ten" => "Hoàng Thị D", "diem" => 9.5],
];

function maxDiem($diem)
{
    $max = $diem[0];
    for ($i = 0; $i < count($diem); $i++) {
        if ($diem[$i] < $max) {
            $max = $diem[$i];
        }
    }
    return $max;
}
echo "Danh sach sinh vien <br>";
foreach ($danhSachSV as $hovadiem) {
    echo $hovadiem["ten"] . " va " . $hovadiem["diem"] . "<br>";
}
$sinhvienMax = maxDiem($danhSachSV);
echo "Sinh vien co diem cao nhat la: " . $sinhvienMax['diem'] . " ten la: " . $sinhvienMax['ten'];
?>