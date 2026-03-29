<form method="post">
    Nội dung: <input type="text" name="note"><br>
    <input type="submit" value="Lưu">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['note'])) {
    $note = trim($_POST['note']);

    file_put_contents('note.txt', $note, FILE_APPEND | LOCK_EX);
    echo "Đã lưu.<hr>Toàn bộ nội dung:<br><pre>" .
        htmlspecialchars(file_get_contents('note.txt')) . "</pre>";
} else
    echo "Vui lòng nhập nội dung.";

?>