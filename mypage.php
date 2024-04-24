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
    <div class="main-block margin-top">
        <div class="main-block-wrapper">
            <div class="left-contents">
                <div class="icon">プロフィール画像</div>
                <img src="img/user_icon.png" id="iconimg">
                <label class="file_label" >
                    <div class="icon-change">
                        <input type="file" name="file">画像変更
                    </div></label>
            </div>
            <div class="right-contents">
                <div class="name">名前</div>
                <input type="text" class="textBoxEl" >
                <div class="achievements">
                    <input type="button" value="achievements" class="buttonEl">
                </div>
        </div>
        <div class="main-block-wrapper2">
            <div class="mailaddress">メールアドレス</div><input type="email" class="textBoxEl">
            <div class="password">パスワード</div><input type="password" class="textBoxEl">
            <div class="question">自分の質問</div>
        </div>
    </div>
</body>
<?php
include "footer.php";
?>

</html>