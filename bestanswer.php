<?php
require_once __DIR__ . '/class/question.php';
$question = new question();
require_once __DIR__ . '/class/answer.php';
$answer = new answer();
$question_id = $_GET['question_id'];
$answer_id = $_POST['answer_id'];
$answers = $answer->allanswer($question_id);
$bestanswers =  $answer->GetBestAnswer($answer_id); //ベストアンサー状況の取得
foreach ($answers as $ans){
    var_dump($ans['answer_id'] == $answer_id);
    if ($ans['answer_id'] == $answer_id){
        $bestans = $answer->BestAnswer($ans['answer_id'],true);   //ベストアンサーに設定する
    }
    else{
        $bestans = $answer->BestAnswer($ans['answer_id'],false);   //それ以外をベストアンサーから外す
    }    
}
$questions = $question->allquestion(); //全ての質問を取ってくる
require_once __DIR__ . '/myquestion.php';
?>