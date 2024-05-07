<?php
include "header.php";
?>
<link href="css/article_detail.css" rel="stylesheet">
<div class="main-container margin-top">
    <div class="content-group">
        <div class="start-content">
            <div class="row">
                <div class="w-20">
                    <div class="icon-wrap" alt="icon">
                        <img src="" class="user-icon" onError="this.onerror=null;this.src='../src/img/user_icon.png'">
                    </div>
                </div>
                <div class="w-80">
                    <span class="title">
                        神戸太郎
                    </span>
                </div>
                <div class="tag-container">
                    <span class="tag">AWS</span>
                    <span class="tag">Linux</span>
                    <span class="tag">Python</span>
                </div>
            </div>
            <div class="row">
                <div class="article-title">
                    <span>AWSでブロックチェーン実装してみた</span>
                </div>
            </div>
            <hr>
            <?php for ($index = 0; $index < 5; $index++) {
                echo '
                <div class="row">
                    <span class="main-text-title">
                        1.はじめに
                    </span>
                </div>
                <hr>
                <div class="row">
                <span class="main-text">
                    きょうはきょうはきょうあｈ
                </span>

                </div>
                ';
            }
            ?>


        </div>
        <div class="end-content">
            <?php for ($index = 0; $index < 5; $index++) {
                echo '
            <div class="row">
                <span class="main-text"> 1.はじめに</span>
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
                        <img src="" class="user-icon" onError="this.onerror=null;this.src='../src/img/user_icon.png'">
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