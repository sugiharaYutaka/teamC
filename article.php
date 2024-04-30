<?php
include "header.php";
if (!isset($article)) {
    require_once __DIR__ . '/class/article.php';
    $article = new article();
}
$articles = $article->allarticle(); //全ての記事を取ってくる

$result = UserLogic::checkLogin();

if (empty($_GET['search']))
    $_GET['search'] = "";
$searchWord = $_GET['search'];  //検索した際にsearchWordに持ってくる
$searchWord = mb_convert_kana($searchWord, 's');//全角スペースを半角にする
$searchWords = explode(" ", $searchWord);   //スペース区切りで分割する

$hitFlag = true;
?>
<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
<link href="css/article.css" rel="stylesheet">
<form action="../teamC/article.php" method="get" class="search margin-top">
    <input type="search" class="input" name="search" placeholder="キーワードを入力">
    <button type="submit" class="search-btn" name="submit"><i class="fa fa-search"></i></button>
</form>
<div class="main-container">
    <?php
    foreach ($articles as $art) {
        $qtext = $art['article_title'];
        $tag = $art['tag'];
        $searchWordFlag = true;
        for ($i = 0; $i < count($searchWords); $i++) {
            if (
                strstr($qtext, $searchWords[$i]) == true ||
                strstr($tag, $searchWords[$i]) == true
            )
                $searchWordFlag = false;
        }
        if ($searchWord != "" && $searchWordFlag) {  //検索内容があり、かつ内容と違った場合表示しない
            continue;
        } else {
            $hitFlag = false;
        }

        echo '
        <div class="row">
            <div class="w-20">
                <div class="icon-wrap" alt="icon">
                <a href="profile.php?user_id=', $art['user_id'], '">
                    <img src="" class="user-icon" onError="this.onerror=null;this.src=\'../teamC/img/user_icon.png\'">
                </div>
            </div>
            <div class="w-80">
                <div class="top-wrap">
                    <span class="title">
                        <a href="article_detail.php?article_id=', $art['article_id'], '">
                           ', mb_strimwidth($art['article_title'], 0, 160, '...', 'UTF-8'), '
                        </a>
                    </span>
                </div>';
        if ($result) {
            echo '
                        <form method="POST" action="addgoodarticle.php">
                            <div class="bot-wrap">
                            <span class="bot-label">
                            <!-- 日時 -->
                                <span class="time">
                                ', $art['created_at'], '
                                </span>
                            <!-- 日時ここまで -->
                                <input type="hidden" name="article_id" value="', $art['article_id'], '">
                                <input type="hidden" name="good" value="', $art['good'], '">&nbsp;
                                <input type="submit" value="👍">
                            </span>
                        </form>';
        } else {
            echo '
                        <form method="POST" action="login_form.php">
                            <div class="bot-wrap">
                            <span class="bot-label">
                            <!-- 日時 -->
                                <span class="time">
                                ', $art['created_at'], '
                                </span>
                            <!-- 日時ここまで -->
                                <input type="hidden" name="article_id" value="', $art['article_id'], '">
                                <input type="hidden" name="good" value="', $art['good'], '">&nbsp;
                                <input type="submit" value="👍">
                            </span>
                        </form>';
        }

        echo '
                    <span class="bot-count">
                        ', $art['good'], '
                    </span>
                </div>
            </div>
        </div><hr>
        ';
    }
    ?>
    <?php   //ヒットしてたかどうかでdisplayを変更するクラスを追加する
    $ZeroHitClass = "ZeroHitDisplay";
    if ($hitFlag)
        $ZeroHitClass = "";
    ?>
    <div class="ZeroHit <?php echo $ZeroHitClass; ?>">
        <p>検索結果が見つかりませんでした</p>
    </div>
</div>