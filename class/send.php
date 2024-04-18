<?php
require_once __DIR__ . '/question.php';
$text = $_POST['text'];
$keyword = $_POST['keyword'];
$image = null;
$imageFilename = null;
if ($_FILES) {
    $image = $_FILES['image'];
    $imageFilename = '../img/' . $_FILES['image']['name']; //FILENAME
}

//$user_id = (int)$_SESSION['user_id'];
$user_id = 1;

$q = new question();
$q->addquestion($user_id, $text, $keyword, $imageFilename);
if ($imageFilename != null) {
    //move_uploaded_file($image['tmp_name'], $imageFilename);
}
?>