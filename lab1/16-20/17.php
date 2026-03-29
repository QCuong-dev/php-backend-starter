<form method="post">
    Nhap chuoi: <input name="string_upcase"><br>
    <input type="submit" value="In hoa">
</form>
<?php
if (isset($_POST['string_upcase']) && is_string($_POST['string_upcase'])) {
    echo strtoupper($_POST['string_upcase']);
}
?>