<link href="css/login.css" rel="stylesheet">
<div class="main-container">
    <h2 class="center">ログイン画面</h2>
    <form action="home.php" method="POST">
        <div class="row">
            <span class="label">メールアドレス</span>
            <input type="text" name="mail">
        </div>
        <div class="row">
            <span class="label">パスワード</span>
            <input type="password" name="password">
        </div>
        <div class="row">
            <button type="submit" class="btn">ログイン</button>
    </form>
</div>
<div class="button">
    <button class="cancel" onclick="location.href='home.php'">キャンセル</button>
</div>
<br>
<div class="forget">新規登録は<a href="siginup.php">こちら</a>から</div>
</div>