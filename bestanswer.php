<?php
require_once __DIR__ . '/class/question.php';
$question = new question();
require_once __DIR__ . '/class/answer.php';
$answer = new answer();
$question_id = $_GET['question_id'];
$answer_id = $_POST['answer_id'];
$bestanswers =  $answer->GetBestAnswer($answer_id); //ベストアンサー状況の取得
if($bestanswers['bestans'] == 1){
    $bestans = $answer->BestAnswer($answer_id,false);   //ベストアンサーに設定する
}
else{
    $bestans = $answer->BestAnswer($answer_id,true);   //ベストアンサーに設定する
}
$questions = $question->allquestion(); //全ての質問を取ってくる
require_once __DIR__ . '/myquestion.php';
?>