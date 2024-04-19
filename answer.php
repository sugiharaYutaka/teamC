<?php
include "header.php";
require_once ('../teamC/class/getQA.php');
?>
<link href="css/answer.css" rel="stylesheet">
<div class="main-container margin-top">
    <form class="answer-form" method="post" action="../teamC/class/sendAnswer.php" enctype="multipart/form-data">
        <div class="row">
            <span class="label">質問内容</span>
            <?php
            echo '<textarea class="input lines">' . $question['text'] . '</textarea>';
            ?>
        </div>
        <input type="hidden" name="question_id" value="<?php echo ($question['question_id']); ?>">
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
                <button type="submit" class="btn">送信</button>
            </div>
        </div>
    </form>
    <hr>
    <span class="label title-margin">回答一覧</span>
    <?php
    foreach ($answers as $answer) {
        echo '
        <div class="row-answer">
            <div class="w-20">
                <div class="icon-wrap" alt="icon">
                    <img src="" class="user-icon">
                </div>
                <div class="name-wrap">
                    <span class="user-name">
                            ' . $answer['name'] . '
                    </span>
                </div>
            </div>
            <div class="w-80">
                <div class="text-wrap">
                    <span class="answer-text">
                        ' . $answer['text'] . '
                    </span>
                </div>
            </div>
        </div>
        <hr>
        ';
    }
    ?>
</div>