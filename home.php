<?php
session_start();
require_once 'class/UserLogic.php';

$user_id = 1;
require_once __DIR__ . '/class/Product.php';
$product = new Product();
$item = $product->getItem($user_id);
require_once __DIR__ . '/class/question.php';
$question = new question();
$questions = $question->allquestion(); //全ての質問を取ってくる

$result = UserLogic::checkLogin();

if ($result) {
    $login_user = $_SESSION['login_user'];
} else {
    $login_user['name'] = 'ゲスト';
} ?>

require_once __DIR__ . '/class/article.php';
$article = new article();
$articles = $article->allarticle();
?>


<?php
include "header.php";
?>

<body>
    <link href="css/home.css" rel="stylesheet">
    <div class="search margin-top">
        <form action="../teamC/home.php" method="get">
            <input type="search" name="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" value="検索">
            <p><?php echo $login_user['name']; ?></p>
        </form>
    </div>
    <div class="total">
        <div class="question">
            <a href="QandA.php">質問一覧</a>
            <?php
            foreach ($questions as $ques) {   //ここでデータベースに登録されてるすべての質問を取り出し、表示
            ?>
                <div class="questionAll">

                    <a href=""><?php echo $ques['text'] ?></a>
                </div>
            <?php } ?>
        </div>
        <div class="div-y"></div>
        <div class="article">
            <a href="article.php">記事一覧</a>
            <?php
                foreach($articles as $art){   //ここでデータベースに登録されてるすべての質問を取り出し、表示
            ?>
            <div class="articleAll">
                <a href=""><?php echo $art['text'] ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
</body>