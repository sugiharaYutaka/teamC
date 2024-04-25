<!DOCTYPE html>
<html lang="ja">
<?php
include "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/header.css">
    <title>PROFILE</title>
</head>

<body>
    <div class="main-block margin-top">
        <div class="main-block-wrapper">
            <div class="left-contents">
                <div class="icon">プロフィール画像</div>
                <img src="img/user_icon.png" id="iconimg">
                <label class="file_label">
                </label>
            </div>
            <div class="right-contents">
                <div class="name">名前</div>
                <p class="username">さかもと</p>
                <div class="achievements">
                    <input type="button" value="achievements" class="buttonEl">
                </div>
            </div>
            <div class="main-block-wrapper2">
                <div class="question">さかもとさんの質問</div>
                <div class="question">さかもとさんの記事</div>
            </div>
        </div>
    </div>
</body>

</html>