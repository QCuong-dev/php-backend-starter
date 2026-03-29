<form method="get">
    Nhap so nguyen N: <input type="number" name="so-nguyen-n" step="any">
    <input type="submit" value="In">

</form>

<?php
if (isset($_GET['so-nguyen-n']) && is_numeric($_GET['so-nguyen-n']))
    for ($i = 0; $i <= $_GET['so-nguyen-n']; $i++) {
        echo $i . "<br>";
    }

?>