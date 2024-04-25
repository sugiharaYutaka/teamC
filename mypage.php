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
    <title>mypage</title>
</head>

<body>
    <div class="main-block margin-top">
        <div class="main-block-wrapper">
            <div class="left-contents">
                <div class="icon">プロフィール画像</div>
                <img src="img/user_icon.png" id="iconimg">
                <label class="file_label">
                    <div class="icon-change">
                        <form>
                            <input type="file" name="file">画像変更
                        </form>
                    </div>
                </label>
            </div>
            <div class="right-contents">
                <div class="name">名前</div>
                <input type="text" class="textBoxEl">
                <div class="achievements">
                    <input type="button" value="achievements" class="buttonEl">
                </div>
            </div>
            <div class="main-block-wrapper2">
                <div class="mailaddress">メールアドレス</div><form><input type="email" class="textBoxEl"></form>
                <div class="password">パスワード</div><form><input type="password" class="textBoxEl"></form>
                <div class="question">自分の質問</div>
            </div>
        </div>
    </div>
    <footer>
        <button onclick="location.href='home_H.php'">ホームに戻る</button>
        <form><input type="submit" form="memberdata" value="保存">
        </form>
    </footer>

</body>

</html>