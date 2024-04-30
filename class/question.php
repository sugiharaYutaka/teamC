<?php
// スーパークラスであるDbDataを利用するため
require_once __DIR__ . '/dbdata.php';

class question extends DbData
{
  // 質問を登録
  public function addquestion($userId, $text, $tag, $imagefile)
  {
    //登録する
    try {

      if ($imagefile != null) {  //ファイルが指定されていればそのファイルをデータベースに登録
        $sql = "insert into question(user_id, text, tag, image_filename) values(?, ?, ?,?)";
        $result = $this->exec($sql, [$userId, $text, $tag, $imagefile]);
      } else { //されていなかったら登録しない(デフォルトの画像)
        $sql = "insert into question(user_id, text, tag) values(?, ?, ?)";
        $result = $this->exec($sql, [$userId, $text, $tag]);
      }
      return true;
    } catch (Exception $e) {
      return false;
    }
  }


  // 指定した質問を削除する
  public function deletequestion($question_id)
  {
    $sql = "delete from question where question_id = ?";
    $result = $this->exec($sql, [$question_id]);
  }
  // 指定した質問を取得
  public function getQuestion($question_id)
  {
    $sql = "select * from question where question_id = ?";
    $stmt = $this->query($sql, [$question_id]);
    $questions = $stmt->fetch();
    return $questions;
  }


  //指定したユーザーの全ての質問を取ってくる
  public function userquestion($user_id)
  {
    $sql = "select * from question where user_id = ?";
    $stmt = $this->query($sql, [$user_id]);
    $questions = $stmt->fetchAll();
    return $questions;
  }

  //全ての質問を取ってくる
  public function allquestion()
  {
    $sql = "select * from question ORDER BY created_at DESC";
    $stmt = $this->query($sql, []);
    $questions = $stmt->fetchAll();
    return $questions;
  }

  //指定した質問の編集
  public function EditQuestion($question_id,$text){
    $sql = "update question set text = ? where question_id = ?";
    $result = $this->exec($sql, [$text,$question_id]);
    return $result;
  }
}
