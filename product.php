<?php
require_once __DIR__.'/dbdata.php';

class product extends DbData{
    public function getItems($genre)
    {
        $sql ="select * from users where genre = ?";
        $stmt = $this->query($sql,[$genre]);
        $items = $stmt->fetchAll();
        return $items;
    }

    public function getItem($ident)
    {
        $sql = "select * from users where ident = ?";
        $stmt = $this->query($sql, [$ident]);
        $item = $stmt->fetch();
        return $item;
    }
}