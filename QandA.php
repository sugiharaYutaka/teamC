<?php
include "header.php";
?>
<link href="css/article.css" rel="stylesheet">
<div class="main-container margin-top">
    <?php
    for ($data = 0; $data < 6; $data++) {
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
                            Centos7の任意のポートを開放する方法を教えてください
                        </a>
                    </span>
                </div>
                <div class="bot-wrap">
                    <span class="bot-label">
                        回答
                    </span>
                    <span class="bot-count">
                        3
                    </span>
                </div>
            </div>
        </div><hr>
        '
        ;
    }
    ?>
</div>