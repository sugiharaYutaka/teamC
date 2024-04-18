<!DOCTYPE html>
<html>

<head>
    <title>question</title>
</head>
<?php
include "header.php";
?>

<body>
    質問内容
    <form method="post" action="b.php">
        <input type="text" name="question">
        タグ・キーワード
        <input type="text" name="keyword">
        ファイルアップロード
        <form action="file_up.php" enctype="multipart/form-data" method="post"><input name="file_upload" type="file">
            <input type="submit" value="送信">
        </form>
    </form>
</body>
<?php
include "footer.php";
?>

</html>