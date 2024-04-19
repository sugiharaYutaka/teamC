<?php
include "header.php";
require_once __DIR__ . '/class/question.php';
$question = new question();
require_once __DIR__ . '/class/answer.php';
$answer = new answer();
$questions = $question->allquestion(); //全ての質問を取ってくる
$user_id = 1;
$text = "A";
$tag = "AA";
$imagefile = null;
$question->addquestion($user_id,$text,$tag,$imagefile)
?>
<link href="css/article.css" rel="stylesheet">
<div class="main-container margin-top">
    <?php
     foreach($questions as $ques){ 
        $questionId = $ques['question_id'];  //質問のIDを保存
        $qanswers = $answer->qanswer($questionId);
        $qcount = $answer->countanswer($questionId);
        $qtext = $ques['text'];
        if(Strlen($qtext) >= 80 ){
            $qtext = substr($qtext,0, );
            $qtext = $qtext."...";
        }
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
                            ',mb_strimwidth ($qtext, 0, 160, '...','UTF-8' ),'
                        </a>
                    </span>
                </div>
                <div class="bot-wrap">
                    <span class="bot-label">
                        回答
                    </span>
                    <span class="bot-count">
                        ',"$qcount[0]",'
                    </span>
                </div>
            </div>
        </div><hr>
        '
        ;
    }
    ?>
</div>