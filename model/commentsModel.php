<?php

class commentsModel
{
   
    private $db;

    public function __construct()
    {
        $this->db = BDD::connexion();
    }

    public function getComments($id)
    {
        $sql = "SELECT *
        FROM comments
        INNER JOIN users 
        ON comments.id_user=users.id_user
        WHERE comments.id_article=$id
        ORDER BY `comments`.`date_creation` DESC";

        return  $this->db->query($sql)->fetchAll();
    }


    
    public function setComment($comment,$id_user, $id_article)
    {
        date_default_timezone_set('Europe/Paris');
        $date = date('y-m-d h:i:s');

        $ajout = $this->db->prepare("INSERT INTO comments(comment,id_user, id_article,date_creation) VALUES(?,?,?,?)");
        return $ajout->execute([$comment, $id_user, $id_article, $date]);

    }
}