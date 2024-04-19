<?php
// スーパークラスであるDbDataを利用するため
require_once __DIR__ . '/dbdata.php';

class question extends DbData
{
  // 質問を登録
  public function addquestion($userId, $text, $tag, $imagefile)
  {
    //登録する
    if ($imagefile != null) {  //ファイルが指定されていればそのファイルをデータベースに登録
      $sql = "insert into question(user_id,text,tag,image_filename) values(?, ?, ?,?)";
      $result = $this->exec($sql, [$userId, $text, $tag, $imagefile]);
      return $result;
    } else { //されていなかったら登録しない(デフォルトの画像)
      $sql = "insert into question(user_id,text,tag) values(?, ?, ?)";
      $result = $this->exec($sql, [$userId, $text, $tag]);
      return $result;
    }
  }


  // 指定した質問を削除する
  public function deletequestion($question_id)
  {
    $sql = "delete from question where question_id = ?";
    $result = $this->exec($sql, [$question_id]);
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
    $sql = "select * from question";
    $stmt = $this->query($sql, []);
    $questions = $stmt->fetchAll();
    return $questions;
  }

}
