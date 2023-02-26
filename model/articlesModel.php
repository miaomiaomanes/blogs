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
        return $this->db->query("SELECT * FROM articles ORDER BY id_article DESC LIMIT 1 ")->fetchAll();
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
        $date = date('Y-m-d');

        $ajout = $this->db->prepare("INSERT INTO articles(titre,contenu,image,dateCreation,id_user,id_categorie) VALUES(?,?,?,?,?,?)");
        return $ajout->execute([$titre, $contenu, $image, $date, $id_user, $id_cat]); // true/false

    }

    public function deleteArticle($id)
    {
    $sql=" ALTER TABLE `articles`
    ADD CONSTRAINT `articles_ibfk_1`
    FOREIGN KEY (`id_article`) REFERENCES TABLE comments (`id_article`)
    DELETE articles FROM articles JOIN comments ON articles.id_article = comments.id_article WHERE articles.id_article=?;
    ";
    
        $delete = $this->db->prepare($sql);
        return $delete->execute([$id]);
    }

    
    public function getArticlesByCatId()
    {
        $sql = "SELECT articles.*,categories.*
        FROM articles
        LEFT JOIN categories 
        ON articles.id_categorie=categories.id_categorie";

        return  $this->db->query($sql)->fetchAll();
    }
}
