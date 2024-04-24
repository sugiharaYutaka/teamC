<!DOCTYPE html>
<html lang="ja">
<?php
include "header.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mypage.css">
    <title>mypage</title>
</head>
<body>
        <div class="main-block">
            <div class="main-block-wrapper">
                <div class="icon">icon</div>
                <div class="name">Name<br><input type="text" class="textBoxEl" placeholder="お名前"></div>
                <div class="icon-change"><input type="file" accept="image/*"></div>
                <div class="achievements"><input type="submit" value="achievements" class="buttonEl"></div>
            </div>
            <div class="main-block-wrapper2">
                <div class="mailaddress">mailaddress<br><input type="text" class="textBoxEl"></div>
                <div class="password">password<br><input type="text" class="textBoxEl"></div>
                <div class="question"></div>
            </div>
        </div>
</body>
<?php
include "footer.php";
?>
</html>