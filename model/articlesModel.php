<?php

class articlesModel
{


    private $db;

    public function __construct()
    {
        $this->db = BDD::connexion();
    }

    public function getArticles()
    {
        return $this->db->query("SELECT * FROM articles ORDER BY id_categorie DESC")->fetchAll();
    }

    public function getDernierArticles()
    {
        return $this->db->query("SELECT * FROM articles ORDER BY id_article DESC LIMIT 10")->fetchAll();
    }
    public function getArticleById($id)
    {
        $sql = "SELECT articles.*,categories.*
        FROM articles
        INNER JOIN categories 
                ON articles.id_categorie=categories.id_categorie
                WHERE articles.id_article=$id";

        return  $this->db->query($sql)->fetch();
    }

    public function getArticleByCat($id_cat)
    {
        $sql = "SELECT articles.*,categories.*
        FROM articles
        INNER JOIN categories 
        ON articles.id_categorie=categories.id_categorie
        WHERE categories.id_categorie=$id_cat";

        return  $this->db->query($sql)->fetchAll();
    }

    public function setArticle($titre, $contenu, $image, $id_user, $id_cat)
    {
        $date = date('Y-m-d h:i:s');

        $ajout = $this->db->prepare("INSERT INTO articles(titre,contenu,image,dateCreation,id_user,id_categorie) VALUES(?,?,?,?,?,?)");
        return $ajout->execute([$titre, $contenu, $image, $date, $id_user, $id_cat]); // true/false

    }

    public function deleteArticle($id)
    {
        $delete = $this->db->prepare("DELETE FROM articles  WHERE id_article=?");
        return $delete->execute([$id]);
    }

    
    public function getArticlesByCatId()
    {
        $sql = "SELECT articles.*,categories.*
        FROM articles
        LEFT JOIN categories 
        ON articles.id_categorie=categories.id_categorie"
        ;

        return  $this->db->query($sql)->fetchAll();
    }
}
