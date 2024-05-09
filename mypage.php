<?php
session_start();
require_once 'class/UserLogic.php';
//ログイン判定
$result = UserLogic::checkLogin();

if (!$result) {
    $_SESSION['login_err'] = 'ユーザー登録してログインしてください';
    header('Location: signup_form.php');
    return;
}


$login_err = isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);

$login_user = $_SESSION['login_user'];
//var_dump($userData['icon_filename']);
?>

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
<script type="text/javascript">
    function check() {
        var check3 = document.form.pw1.value;
        var check4 = document.form.pw2.value;

        if (check3 != check4) {
            document.getElementById('alert').innerHTML = "<p>確認用パスワードが異なります。</p>";
            return false;
        } else {
            return true;
        }
    }
    function imgdata(input) {
        console.log(input);
        for (let i = 0; i < input.files.length; i++) {
            console.log(input.files[i]);
        }
        var filedata = input.files[0];
        console.log(filedata.name);
        document.getElementById('filename').innerHTML = "<p>" + filedata.name + "</p>";
        return false;
    }

</script>

<body>
    <div class="main-block margin-top">
        <div class="main-block-wrapper">
            <div class="left-contents">
                <div class="icon">プロフィール画像</div>
                <img src="img/<?php echo ($login_user['icon_filename']) ?>" id="iconimg">
                <form method="POST" action="iconchange.php" name="form2" enctype="multipart/form-data">
                    <label class="selectimg">ファイルを選択
                        <input type="file" name="file" id="file" onchange="imgdata(this)" accept=".png, .jpg, .jpeg"
                            required>
                    </label>
                    <div id="filename">
                    </div>
                    <input type="hidden" name="user_id" value="<?php echo ($login_user['user_id']) ?>">
                    <input type="submit" class="iconchange" value="変更">
                </form>
            </div>
            <div class="right-contents">
                <div class="mailaddress">ユーザーID</div>
                <p><?php echo ($login_user['user_id']) ?></p>
                <div class="name">名前</div>
                <p class="username"><?php echo ($login_user['name']) ?></p>
                <div class="mailaddress">メールアドレス</div>
                <p><?php echo ($login_user['email']) ?></p>
                <div class="mailaddress">現在のポイント</div>
                <p><?php echo ($login_user['point']) ?></p>

            </div>
        </div>
        <div class="main-block-wrapper2">
            <div class="password">パスワード変更</div>
            <a href="password_change_page.php" class="center"><input class="password-change" type="button"
                    value="パスワードを変更"></a>
            <div class="question">自分の質問</div>
            <div class="question">自分の記事</div>
        </div>
    </div>
    </div>
</body>

</html>