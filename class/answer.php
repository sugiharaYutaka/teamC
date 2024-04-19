<?php
// スーパークラスであるDbDataを利用するため
require_once __DIR__ . '/dbdata.php';

class answer extends DbData
{
    // 回答を登録
    public function addanswer($userId,$text, $questionid,$imagefile)
    {
    //登録する
    if($imagefile != null){  //ファイルが指定されていればそのファイルをデータベースに登録
        $sql = "insert into answers(user_id,text,quetion_id,image_filename) values(?, ?, ?,?)";
        $result = $this->exec($sql, [$userId, $text, $questionid, $imagefile]);
    }
    else{ //されていなかったら登録しない(デフォルトの画像)
    $sql = "insert into question(user_id,text,quetion_id) values(?, ?, ?)";
    $result = $this->exec($sql, [$userId, $text, $questionid]);
    }   

    }

    //回答の取り出し
    public function allanswer($answerid)
    {
        $sql = "select * from answers where answer_id = ?";
        $stmt = $this->query($sql, [$answerid]);
        $questions = $stmt->fetchAll();
        return $questions;
    }

    //指定した質問の回答のみを取り出す
    public function qanswer($questionid)
    {
        $sql = "select * from answers where quetion_id = ?";
        $stmt = $this->query($sql, [$questionid]);
        $questions = $stmt->fetchAll();
        return $questions;
    }
    //回答の削除
    public function deleteanswer($answerid)
    {
      $sql = "delete from answers where answer_id = ?";
      $result = $this->exec($sql, [$answerid]);
    }
    //ユーザーの回答
    public function useranswer($userid)
    {
        $sql = "select * from answers where user_id = ?";
        $stmt = $this->query($sql, [$userid]);
        $questions = $stmt->fetchAll();
        return $questions;
    }

    //指定した質問の回答数の取得
    public function countanswer($questionid)
    {
        $sql = "select count(*) from answers where quetion_id = ?";
        $stmt = $this->query($sql, [$questionid]);
        $count = $stmt->fetch();
        return $count;
    }

}
