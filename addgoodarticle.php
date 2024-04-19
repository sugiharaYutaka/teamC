<?php
$articleid = $_POST['article_id'];
$good = $_POST['good'];
$good = $good + 1;
require_once __DIR__ . '/class/article.php';
$article = new article();
$article->goodarticle($good,$articleid);

require_once __DIR__ . '/article.php';