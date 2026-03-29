<!-- baitap1 -->
<?php
echo "Hello world";

echo "<p>Time right now: " . date("d/m/Y H:i:s") . "</p>";


?>
<!-- baitap2 -->
<?php
$name = "Nguyen Van A";
$age = "20";

echo "Xin chao, toi ten " . $name . " nam nay toi: " . $age;
echo "<br>";
echo "Xin chao, toi la $name nam nay toi $age tuoi";
?>

<!-- baitap5 -->
<?php
for ($i = 2; $i <= 9; $i++) {
    echo "<h3>Bang cu chuong $i</h3>";
    for ($j = 1; $j <= 10; $j++)
        echo "| $i * $j = " . $j * $i;
}
?>

<!-- baitap6 -->
<?php
echo "<h1>Liet ke cac so nguyen to</h1>";
function songuyento($a)
{
    if ($a < 2)
        return false;
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i == 0)
            return false;
    }
    return true;
}
for ($i = 1; $i <= 100; $i++) {
    if (songuyento($i))
        echo $i . " ";
}

?>

<!-- baitap7 -->
<?php
function dientichhinhtron($r)
{
    return pi() * $r * $r;
}
?>

<!-- baitap8 -->
<?php
$arr = [4, 12, 412, 1, 5, 16123, 12, 412, 67, 32, 31, 5234, 3457, 32];
function minmax($a)
{
    return ['min' => min($a), 'max' => max($a)];
}

echo "<h1>Cac gia tri co trong mang la:</h1>";
for ($i = 0; $i < count($arr); $i++)
    echo "|  $arr[$i]  ";
$mm = minmax($arr);
echo "<br>Min: {$mm['min']}, Max: {$mm['max']}";


?>

<!-- baitap9 -->
<?php
function reString($s)
{
    return strrev($s);
}
echo "<br>";
echo reString(" Hello");
?>