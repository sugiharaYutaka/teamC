<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    require_once 'class/UserLogic.php';
}
$err = [];
if (!$email = filter_input(INPUT_POST, 'email')) {
    $err['email'] = 'メールアドレスを記入してください。';
}

if (!$password = filter_input(INPUT_POST, 'password')) {
    $err['password'] = 'パスワードを記入してください。';
}

if (count($err) > 0) {
    //エラーがあった戻す
    $_SESSION = $err;
    header('Location: login_form.php');
    return;
}

//ログイン成功処理
$result = UserLogic::login($email, $password);
if (!$result) {
    header('Location: login_form.php');
    return;
}
?>


<head>
    <meta charset="UTF-8">
    <title>ログイン完了</title>
    <link href="css/form.css" rel="stylesheet">
</head>

<?php
include 'header.php';
?>
<div class="main-container margin-top">
    <h2 class="center">ログインしました。</h2>
    <?php
    $secretKey =  '6LdOGOIpAAAAAO1XDmJV5j_IwyQQm1bH7PM2RNEh';
    $captchaResponse = $_POST['g-recaptcha-response'];

    // APIリクエスト
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");

    // APIレスポンス確認
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        // echo '<h1 class="text-center"><span class="no_wrap">ありがとうございました。</span></h1>'; // 成功（ロボットではない）
        if (mail($to, "題名をこちらへ入力", $message, $headers)) {
            echo '<h1 class="text-center"><span class="no_wrap">ありがとうございました。</span></h1>';
        }
    } else {
        echo '<h1 class="text-center">Sorry unexpected error occurred, please try again later.</h1>'; // 失敗
    }
    ?>
    <div class="button">
        <button class="cancel" onclick="location.href='mypage.php'">マイページ</button>
    </div>
    <div class="button">
        <button class="cancel" onclick="location.href='home.php'">ホーム</button>
    </div>
    <br>
</div>