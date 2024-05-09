<?php
require_once __DIR__ . '/DbData.php';

class ArticleComment extends DbData
{
    public function InsertComment($article_id, $userId, $text)
    {
        $sql = "insert into comments(article_id,user_id, text) values(?, ?,?)";
        return $this->exec($sql, [$article_id, $userId, $text]);
    }
    public function SelectComment($article_id)
    {
        $sql = "select * from comments inner join users on users.user_id = comments.user_id where comments.article_id = ?";
        $stmt = $this->query($sql, [$article_id]);
        return $stmt->fetchAll();
    }

    public function evaluation($evaluation,$comment_id)
    {
        $sql =     $sql = "update comments set evaluation = ? where comment_id = ?";
        $result = $this->exec($sql, [$evaluation, $comment_id]);
    }
}
