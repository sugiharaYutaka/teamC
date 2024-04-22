<?php
include "header.php";
if(!isset($article)){
    require_once __DIR__ . '/class/article.php';
    $article = new article();
}
$articles = $article->allarticle(); //全ての記事を取ってくる

$result = UserLogic::checkLogin();



?>
<link href="css/article.css" rel="stylesheet">
<div class="main-container margin-top">
    <?php
     foreach($articles as $art){
        echo '
        <div class="row">
            <div class="w-20">
                <div class="icon-wrap" alt="icon">
                    <img src="" class="user-icon">
                </div>
            </div>
            <div class="w-80">
                <div class="top-wrap">
                    <span class="title">
                        <a href="">
                           ', mb_strimwidth ($art['text'], 0, 160, '...','UTF-8' ) ,'
                        </a>
                    </span>
                </div>';
                    if ($result) {
                        echo '
                        <form method="POST" action="addgoodarticle.php">
                            <div class="bot-wrap">
                            <span class="bot-label">
                                <input type="hidden" name="article_id" value="',$art['article_id'],'">&nbsp;
                                <input type="hidden" name="good" value="',$art['good'],'">&nbsp;
                                <input type="submit" value="👍">
                            </span>
                        </form>';
                    } else {
                        echo '
                        <form method="POST" action="login_form.php">
                            <div class="bot-wrap">
                            <span class="bot-label">
                                <input type="hidden" name="article_id" value="',$art['article_id'],'">&nbsp;
                                <input type="hidden" name="good" value="',$art['good'],'">&nbsp;
                                <input type="submit" value="👍">
                            </span>
                        </form>';
                    }
                       
                    echo '
                    <span class="bot-count">
                        ',$art['good'],'
                    </span>
                </div>
            </div>
        </div><hr>
        '
        ;
    }
    ?>
</div>