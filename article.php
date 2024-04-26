<?php
include "header.php";
if (!isset($article)) {
    require_once __DIR__ . '/class/article.php';
    $article = new article();
}
$articles = $article->allarticle(); //全ての記事を取ってくる

$result = UserLogic::checkLogin();

$searchWord = $_GET['search'];  //検索した際にsearchWordに持ってくる 空ならNULLが入る
if (is_null($searchWord)){  //NULLから空白に変える
    $searchWord = "";
}

?>
<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
<link href="css/article.css" rel="stylesheet">
<form action="../teamC/article.php" method="get" class="search margin-top">
    <input type="search" class="input" name="search" placeholder="キーワードを入力">
    <button type="submit" class="search-btn" name="submit"><i class="fa fa-search"></i></button>
</form>
<div class="main-container">
    <?php
    foreach ($articles as $art) {
        $tag = $art['tag'];
        if ($searchWord != "" && $searchWord != $tag){  //検索内容があり、かつタグと違った場合表示しない
            continue;
        }
        echo '
        <div class="row">
            <div class="w-20">
                <div class="icon-wrap" alt="icon">
                    <img src="" class="user-icon" onError="this.onerror=null;this.src=\'../teamC/img/user_icon.png\'">
                </div>
            </div>
            <div class="w-80">
                <div class="top-wrap">
                    <span class="title">
                        <a href="">
                           ', mb_strimwidth($art['text'], 0, 160, '...', 'UTF-8'), '
                        </a>
                    </span>
                </div>';
        if ($result) {
            echo '
                        <form method="POST" action="addgoodarticle.php">
                            <div class="bot-wrap">
                            <span class="bot-label">
                            <!-- 日時 -->
                                <span class="time">
                                ', $art['created_at'], '
                                </span>
                            <!-- 日時ここまで -->
                                <input type="hidden" name="article_id" value="', $art['article_id'], '">
                                <input type="hidden" name="good" value="', $art['good'], '">&nbsp;
                                <input type="submit" value="👍">
                            </span>
                        </form>';
        } else {
            echo '
                        <form method="POST" action="login_form.php">
                            <div class="bot-wrap">
                            <span class="bot-label">
                            <!-- 日時 -->
                                <span class="time">
                                ', $art['created_at'], '
                                </span>
                            <!-- 日時ここまで -->
                                <input type="hidden" name="article_id" value="', $art['article_id'], '">
                                <input type="hidden" name="good" value="', $art['good'], '">&nbsp;
                                <input type="submit" value="👍">
                            </span>
                        </form>';
        }

        echo '
                    <span class="bot-count">
                        ', $art['good'], '
                    </span>
                </div>
            </div>
        </div><hr>
        ';
    }
    ?>
</div>