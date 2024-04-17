<?php
$ident = 1;
require_once __DIR__.'/../product.php';
$product = new Product();
$item = $product->getItem($ident);
?>

<style>
    body{
        margin-top: 15px;
        margin-left: auto;
        margin-right: auto;
    }
    .question{
    width: 270px;
    font-size: 13px;
    float: left;
    display: inline;
    color: #5a5a5a;
    margin: 0px 150px 0px 5px;
    padding: 0px 0px 0px 0px;
    border-top: 0px solid #C0C0C0;
    border-left: 0px solid #C0C0C0;
    border-right: 0px solid #C0C0C0;
    border-bottom: 0px solid #C0C0C0;
    }
    .article{
        width: 270px;
        font-size: 13px;
        float: left;
        display: inline;
        color: #5a5a5a;
        margin: 0px 150px 0px 5px;
        padding: 0px 0px 0px 0px;
        border-top: 0px solid #C0C0C0;
        border-left: 0px solid #C0C0C0;
        border-right: 0px solid #C0C0C0;
        border-bottom: 0px solid #C0C0C0;
    }
    .questionAll{
    width: 270px;
    font-size: 12px;
    text-align: left;
    color: #5a5a5a;
    margin: 0px 0px 0px 7px;
    padding: 0px 0px 5px 0px;
    border-top: 0px solid #C0C0C0;
    border-left: 0px solid #C0C0C0;
    border-right: 0px solid #C0C0C0;
    border-bottom: 0px solid #C0C0C0;
    }
    .articleAll{
    width: 270px;
    font-size: 12px;
    text-align: left;
    color: #5a5a5a;
    margin: 0px 0px 0px 7px;
    padding: 0px 0px 5px 0px;
    border-top: 0px solid #C0C0C0;
    border-left: 0px solid #C0C0C0;
    border-right: 0px solid #C0C0C0;
    border-bottom: 0px solid #C0C0C0;
    }
    .div-y{
    width: 0px;
    height: 200px;
    float: left;
    display: inline;
    margin: 0px 3px 0px 22px;
    _margin: 0px 5px 0px 13px;
    padding: 0px 0px 0px 0px;
    border-top: 1px solid #C0C0C0;
    border-left: 1px solid #C0C0C0;
    border-right: 1px solid #C0C0C0;
    border-bottom: 1px solid #C0C0C0;
    }
    .total{
        width: 895px;
        margin: 27px auto 0px;
        _margin: 0px auto;
        padding: 0px 12px 200px 10px;
        _padding: 7px 12px 5px 10px;
        background: #fff;
        border-top: 1px solid #C0C0C0;
        border-left: 1px solid #C0C0C0;
        border-right: 1px solid #C0C0C0;
        border-bottom: 1px solid #C0C0C0;
    }
    .search{
        margin-top: 15px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
        text-align: center;
    }
</style>

<body>
    <div class="search">
        <form action="file:///C:/htmlpro/teamC-1/homepage/homepage.html" method="get">
            <input type="search" name="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" value="検索">
            <p><?php echo$item['name'];?></p>
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