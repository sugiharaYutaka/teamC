<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    require_once 'UserLogic.php';
}

$result = UserLogic::checkLogin();

$user_id = null;
if ($result) {
    $login_user = $_SESSION['login_user'];
    $user_id = $login_user['user_id'];
} else {
    $login_user['name'] = 'ゲスト';
}

$article_id = $_POST["article_id"];
$comment = $_POST['comment'];
var_dump($comment, $article_id);
require_once ("article_comments.php");
$articleComment = new ArticleComment();

$articleComment->InsertComment($article_id, $user_id, $comment);
header('Location:../article_detail.php?article_id=' . $article_id);
?>