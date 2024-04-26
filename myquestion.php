<?php
include "header.php";
require_once ('../teamC/class/getQA.php');
require_once ('../teamC/class/UserLogic.php');
$userLogic = new UserLogic();
$user_name = $userLogic->getUserById($question['user_id']);
?>
<link href="css/answer.css" rel="stylesheet">
<div class="main-container margin-top">
    <div class="row">
            <div class="user-data">
                <div class="w-20">
                    <img src="" class="user-icon" onError="this.onerror=null;this.src='../teamC/img/user_icon.png'">
                </div>
                <div class="w-80">
                    <span class="name">
                        <?php echo $user_name['name'] ?>
                    </span>
                </div>
            </div>
            <?php
            echo nl2br('<p class="question-text">' . $question['text'] . '</p>');
            ?>
        </div>
    <hr>
    <span class="label title-margin">回答一覧</span>
    <?php
    foreach ($answers as $answer) {
        echo '
        <div class="row-answer">
            <div class="w-20">
                <div class="icon-wrap" alt="icon">
                    <img src="" class="user-icon" onError="this.onerror=null;this.src=\'../teamC/img/user_icon.png\'">
                </div>
                <div class="name-wrap">
                    <span class="user-name">
                            ' . $answer['name'] . '
                    </span>
                </div>
            </div>';
            if($answer['bestans'] == 1){
                echo '<div class="bestw-80">';
            } else {
                echo '<div class="w-80">';
            }
            echo '<div class="text-wrap">
                    <span class="answer-text">
                        ' . $answer['text'] . '
                    </span>
                </div>
                <form method="POST" action="bestanswer.php?question_id='.$answer['quetion_id'].'">
                    <div class="bot-wrap">
                    <span class="bot-label">
                        <input type="hidden" name="answer_id" value="', $answer['answer_id'], '">&nbsp;
                        <input type="submit" value="ベストアンサーにする">
                    </span>
                </form>
            </div>
        </div>
        </div>
        <hr>
        ';
    }
    ?>
</div>