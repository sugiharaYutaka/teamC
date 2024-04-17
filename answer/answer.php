<?php
require_once ('../answer/stabHeader.php');
?>
<link href="../answer/answer.css" rel="stylesheet">
<div class="main-container">
    <form class="answer-form" method="post" action="">
        <div class="row">
            <span class="label">内容</span>
            <textarea class="input lines" name="text"></textarea>
        </div>
        <div class="row">
            <span class="label">タグ・キーワード</span>
            <input class="input" name="tag">
        </div>
        <div class="row">
            <span class="label">画像添付</span>
            <input type="file" accept="image/*" class="input" name="image">
        </div>
        <div class="row">
            <div class="content-end">
                <button type="button" class="btn">送信</button>
            </div>
        </div>
    </form>
</div>