<?php
include "header.php";
$article_id = $_GET['article_id'];
require_once ('class/article.php');
$Article = new article();
$article_data = $Article->getArticleById($article_id);

$section_titles = explode('//', $article_data['section_title']);
$section_main_texts = explode('//', $article_data['section_text']);
$tagList = explode('//', $article_data['tag']);
array_pop($section_main_texts);
array_pop($section_titles);

?>
<link href="css/article_detail.css" rel="stylesheet">
<div class="main-container margin-top">
    <div class="content-group">
        <div class="start-content">
            <div class="row">
                <div class="w-20">
                    <div class="icon-wrap" alt="icon">
                        <img src="" class="user-icon" onError="this.onerror=null;this.src='../teamC/img/user_icon.png'">
                    </div>
                </div>
                <div class="w-80">
                    <span class="title">
                        <?php
                        echo $article_data['name'];
                        ?>
                    </span>
                </div>
                <div class="tag-container">
                    <?php
                    foreach ($tagList as $tag) {
                        echo '
                        <span class="tag">'
                            . $tag .
                            '</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="article-title">
                    <span>
                        <?php
                        echo $article_data['article_title'];
                        ?>
                    </span>
                </div>
            </div>
            <hr>
            <?php foreach ($section_titles as $index => $title) {
                echo '
                <div class="row">
                    <span class="main-text-title">
                        ' . ($index + 1) . '.' . $section_titles[$index] .
                    '</span>
                </div>
                <hr>
                <div class="row">
                <span class="main-text">
                ' . $section_main_texts[$index] .
                    '</span>

                </div>
                ';
            }
            ?>


        </div>
        <div class="end-content">
            <?php foreach ($section_titles as $index => $title) {
                echo '
            <div class="row">
                <span class="main-text">
                ' . ($index + 1) . '.' . $section_titles[$index] .
                    '</span>
            </div>
            ';
            }
            ?>
        </div>
    </div>
    <div class="comment-group">
        <div class="start-content">
            <div class="row">
                <div class="w-20">
                    <div class="icon-wrap" alt="icon">
                        <img src="" class="user-icon" onError="this.onerror=null;this.src='../teamC/img/user_icon.png'">
                    </div>
                    <div class="name-wrap">
                        <span class="user-name">
                            神戸太郎
                        </span>
                    </div>
                </div>
                <div class="w-80">
                    <div class="text-wrap">
                        <span class="answer-text">
                            いいと思うで
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="start-content margin-top-other">
            <form method="post" action="">
                <div class="row">
                    <textarea class="comment-textarea" placeholder="コメントを入力"></textarea>
                    <div class="content-end">
                        <button class="btn">送信</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>