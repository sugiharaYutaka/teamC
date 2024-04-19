<?php
include "header.php";
?>
<link href="css/question.css" rel="stylesheet">
<div class="main-container margin-top">
    <form class="qusetion-form" method="post" action="../teamC/class/sendQuestion.php" enctype="multipart/form-data">
        <div class=" row">
            <span class="label">質問内容</span>
            <textarea class="input lines" name="text"></textarea>
        </div>
        <div class="row">
            <span class="label">タグ・キーワード</span>
            <input type="text" name="keyword">
        </div>
        <div class="row">
            <span class="label">画像添付</span>
            <input type="file" accept="image/*" class="input" name="image">
        </div>
        <div class="row">
            <div class="content-end">
                <button type="submit" class="btn">送信</button>
            </div>
        </div>
    </form>
</div>