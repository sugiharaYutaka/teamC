<?php
$user_id = 1;
require_once __DIR__ . '/class/Product.php';
$product = new Product();
$item = $product->getItem($user_id);
?>

<?php
include "header.php";
?>

<body>
    <link href="css/home.css" rel="stylesheet">
    <div class="search margin-top">
        <form action="../teamC/home.php" method="get">
            <input type="search" name="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" value="検索">
            <p><?php echo $item['name']; ?></p>
        </form>
    </div>
    <div class="total">
        <div class="question">
            <a href="">質問一覧</a>
            <div class="questionAll">
                <a href="">質問</a>
            </div>
        </div>
        <div class="div-y"></div>
        <div class="article">
            <a href="">記事一覧</a>
            <div class="articleAll">
                <a href="">記事</a>
            </div>
        </div>
    </div>
</body>