<?php
class Comments{
    public static function InsertComment($c,$id){
    $query = "INSERT INTO 'comments' ('id', 'new_id', 'text', 'date') VALUE (NULL, '".$id."', '".$c."'
    CURRENT_TIMESTAMP)";
        $db = new Database();
        $q = $db->getAll($query);
        return $q;
    }

    public static function getCommentByNewsID($id){
        $query = "SELECT * FROM comments WHERE new_id".(string)$id."ORDER BY 
        id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getCommentsCountByNewsID($id){
        $query = "SELECT count(id) as 'count' FROM comments WHERE new_id".(string)$id;
        $db = new Database();
        $c = $db->getOne($query);
        return $c;
    }
}
