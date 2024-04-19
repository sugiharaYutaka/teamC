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
$q = new question();
$q->addquestion($user_id, $text, $keyword, $imageFilename);

//$user_id = (int)$_SESSION['user_id'];
$user_id = 1;
try {

    if ($imageFilename != null) {
        //move_uploaded_file($image['tmp_name'], $imageFilename);
    }
} catch (Exception $e) {
    var_dump($e);
    var_dump('error');
}
?>