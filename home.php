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
    $login_user['user_id'] = 0;
}

require_once __DIR__ . '/class/article.php';
$article = new article();
$articles = $article->allarticle();
?>


<?php
include "header.php";
?>

<body>
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <div class="total">
        <form action="../teamC/home.php" method="get" class="search margin-top">
            <input type="search" class="input" name="search" placeholder="キーワードを入力">
            <button type="submit" class="search-btn" name="submit"><i class="fa fa-search"></i></button>
            <p><?php echo $login_user['name']; ?></p>
        </form>
        <div class="qa-content">
            <div class="question">
                <a href="QandA.php">質問一覧</a>
                <hr class="hr-margin">
                <?php
                foreach ($questions as $ques) {   //ここでデータベースに登録されてるすべての質問を取り出し、表示
                    ?>
                    <div class="row">
                        <div class="w-20">
                            <div class="icon-wrap" alt="icon">
                                <img src="" class="user-icon"
                                    onError="this.onerror=null;this.src='../teamC/img/user_icon.png'">
                            </div>
                        </div>
                        <div class="w-80">
                            <span class="title">
                           <?php  if ($login_user['user_id'] != $ques['user_id']) { ?>
                                <a
                                    href="answer.php?question_id=<?= $ques['question_id'] ?>"><?php echo mb_strimwidth($ques['text'], 0, 100, '...', 'UTF-8') ?></a>
                                    <?php } else { ?>
                                        <a href="myquestion.php?question_id=<?= $ques['question_id'] ?>"><?php echo mb_strimwidth($ques['text'], 0, 100, '...', 'UTF-8') ?></a>
                                        <?php } ?>
                            </span>
                        </div>
                    </div>
                    <hr>

                <?php } ?>
            </div>
            <div class="article">
                <a href="article.php">記事一覧</a>
                <hr class="hr-margin">
                <?php
                foreach ($articles as $art) {   //ここでデータベースに登録されてるすべての質問を取り出し、表示
                    ?>
                    <div class="row">
                        <div class="w-20">
                            <div class="icon-wrap" alt="icon">
                                <img src="" class="user-icon"
                                    onError="this.onerror=null;this.src='../teamC/img/user_icon.png'">
                            </div>
                        </div>
                        <div class="w-80">
                            <span class="title">
                                <a href=""><?php echo mb_strimwidth($art['text'], 0, 100, '...', 'UTF-8') ?></a>
                            </span>
                        </div>
                    </div>
                    <hr>
                <?php } ?>
            </div>
        </div>
    </div>
</body>