<?php
require_once ('../answer/stabHeader.php');
?>
<link href="../answer/answer.css" rel="stylesheet">
<div class="main-container">
    <form class="answer-form" method="post" action="">
        <div class="row">
            <span class="label">質問内容</span>
            <textarea class="input lines"></textarea>
        </div>
        <div class="row">
            <span class="label">回答内容</span>
            <textarea class="input lines" name="answer"></textarea>
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