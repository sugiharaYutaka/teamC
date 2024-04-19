<?php
require_once __DIR__ . '/DbData.php';

class article extends DbData
{
     // 記事を登録
  public function addarticle($userId,$text)
  {
    $sql = "insert into article(user_id,text) values(?, ?)";
    $result = $this->exec($sql, [$userId, $text]);
  }

  //指定したユーザーの記事を取得
  public function userarticle($userId)
  {
    $sql = "select * from article where user_id = ?";
    $stmt = $this->query($sql, [$userId]);
    $userarticle = $stmt->fetchAll();
    return $userarticle;
  }

    //全ての記事を取得
    public function allarticle()
    {
      $sql = "select * from article";
      $stmt = $this->query($sql, []);
      $articles = $stmt->fetchAll();
      return $articles;
    }

      // 指定した記事を削除する
  public function deletearticle($article_id)
  {
    $sql = "delete from question where article_id = ?";
    $result = $this->exec($sql, [$article_id]);
  }


}