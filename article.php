<?php
include "header.php";
require_once __DIR__ . '/class/article.php';
$article = new article();
$articles = $article->allarticle(); //全ての質問を取ってくる
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
                </div>
                <div class="bot-wrap">
                    <span class="bot-label">
                        good
                    </span>
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