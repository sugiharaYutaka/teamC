<?php
include "header.php";
require_once __DIR__ . '/class/question.php';
$question = new question();
require_once __DIR__ . '/class/answer.php';
$answer = new answer();
$questions = $question->allquestion(); //全ての質問を取ってくる
$searchWord = $_GET['search'];  //検索した際にsearchWordに持ってくる 空ならNULLが入る
?>
<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
<link href="css/article.css" rel="stylesheet">
<form action="../teamC/QandA.php" method="get" class="search margin-top">
    <input type="search" class="input" name="search" placeholder="キーワードを入力">
    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
</form>
<div class="main-container">
    <?php
    foreach ($questions as $ques) {
        $questionId = $ques['question_id'];  //質問のIDを保存
        $qanswers = $answer->qanswer($questionId);
        $qcount = $answer->countanswer($questionId);
        $qtext = $ques['text'];
        if (Strlen($qtext) >= 80) {
            $qtext = substr($qtext, 0, );
            $qtext = $qtext . "...";
        }
        $tag = $ques['tag'];
        if (isset($searchWord) && $searchWord == $tag){
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
                        <a href="answer.php?question_id=', $ques['question_id'], '">
                            ', mb_strimwidth($qtext, 0, 160, '...', 'UTF-8'), '
                        </a>
                    </span>
                </div>
                <div class="bot-wrap">
                    <span class="bot-label">
                        回答
                    </span>
                    <span class="bot-count">
                        ', "$qcount[0]", '
                    </span>
                </div>
            </div>
        </div><hr>
        '
        ;
    }
    ?>
</div>