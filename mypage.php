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
//var_dump($login_user)
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
</script>

<body>
    <div class="main-block margin-top">
        <div id="alert">
            <?php if (isset($login_err)) : ?>
                <p><?php echo $login_err; ?></p>
            <?php endif; ?>
        </div>
        <div class="main-block-wrapper">
            <div class="left-contents">
                <div class="icon">プロフィール画像</div>
                <img src="img/<?php echo ($login_user['icon_filename']) ?>" id="iconimg">
                <form action="iconchange.php">
                    <label class="file_label">
                        <div class="icon-change">
                            <input type="file" name="file" id="file" accept=".png, .jpg, .jpeg">ファイル選択
                        </div>
                    </label>
                    <input type="hidden" name="user_id" value="<?php echo ($login_user['user_id']) ?>">
                </form>
            </div>
            <div class="right-contents">
                <div class="mailaddress">ユーザーID</div>
                <p><?php echo ($login_user['user_id']) ?></p>
                <div class="name">名前</div>
                <p><?php echo ($login_user['name']) ?></p>
                <div class="mailaddress">メールアドレス</div>
                <p><?php echo ($login_user['email']) ?></p>

            </div>
        </div>
        <div class="main-block-wrapper2">
            <div class="password">パスワード変更</div>
            <form action="mypagechange.php" method="POST" name="form">
                <h3>新しいパスワード</h3>
                <input type="password" id="pw1" name="password" placeholder="パスワード" required="required">
                <h3>新しいパスワード確認用</h3>
                <p>※同じパスワードをもう一度入力してください</p>
                <input type="password" id="pw2" name="password" placeholder="パスワード確認用" required="required"><br>
                <input type="hidden" name="user_id" value="<?php echo ($login_user['user_id']) ?>">
                <input onclick="return check()" type="submit" value="パスワードを変更">
            </form>
            <div class="question">自分の質問</div>
            <div class="question">自分の記事</div>
        </div>
    </div>
    </div>
</body>

</html>