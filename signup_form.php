<?php
session_start();
require_once 'class/UserLogic.php';

//ログイン判定
$result = UserLogic::checkLogin();
if ($result) {
    header('Location: mypage_S.php');
    return;
}
?>

<head>
    <meta charset="UTF-8">
    <title>新規作成</title>
    <link href="css/form.css" rel="stylesheet">
</head>


<?php
include 'header.php';
?>
<link href="css/form.css" rel="stylesheet">
<div class="main-container margin-top">
    <h2 class="center">アカウント新規作成</h2>
    <div id="alert">
        <?php if (isset($login_err)) : ?>
            <p><?php echo $login_err; ?></p>
        <?php endif; ?>
    </div>
    <form action="register.php" method="POST">
        <div class="row">
            <span class="label">お名前</span>
            <input type="text" name="name" placeholder="お名前" required="required">
        </div>
        <div class="row">
            <span class="label">メールアドレス</span>
            <input type="email" name="email" placeholder="メールアドレス" required="required">
        </div>
        <div class="row">
            <span class="label">パスワード</span>
            <input type="password" name="password" placeholder="パスワード" required="required">
        </div>
        <div class="row">
            <span class="label">パスワード確認用</span>
            <p>※同じパスワードをもう一度入力してください</p>
            <input type="password" name="password" placeholder="パスワード確認用" required="required">
        </div>
        <div class="row">
            <button type="submit" class="btn">登録</button>
    </form>
</div>
<div class="button">
    <button class="cancel" onclick="location.href='home.php'">キャンセル</button>
</div>
<br>
<div class="forget">ログインは<a href="login_form.php">こちら</a>から</div>
</div>