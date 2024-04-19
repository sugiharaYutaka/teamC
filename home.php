<?php
$user_id = 1;
require_once __DIR__ . '/class/Product.php';
$product = new Product();
$item = $product->getItem($user_id);
require_once __DIR__ . '/class/question.php';
$question = new question();
$questions = $question->allquestion(); //全ての質問を取ってくる

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
            <p><?php echo $item['name']; ?></p>
        </form>
    </div>
    <div class="total">
        <div class="question">
            <a href="">質問一覧</a>
            <hr>
            <?php
                foreach($questions as $ques){   //ここでデータベースに登録されてるすべての質問を取り出し、表示
            ?>
            <div class="questionAll">

                <a href=""><?php echo mb_strimwidth($ques['text'], 0, 100, '...','UTF-8' ) ?></a>
            </div>
            <hr>
            <?php } ?>
        </div>
        <div class="div-y"></div>
        <div class="article">
            <a href="">記事一覧</a>
            <hr>
            <?php
                foreach($articles as $art){   //ここでデータベースに登録されてるすべての質問を取り出し、表示
            ?>
            <div class="articleAll">
                <a href=""><?php echo mb_strimwidth($art['text'], 0, 100, '...','UTF-8' ) ?></a>
            </div>
            <hr>
            <?php } ?>
        </div>
    </div>
</body>