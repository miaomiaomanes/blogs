<?php

include_once('model/articlesModel.php');
include_once('model/categoriesModel.php');
include_once("model/commentsModel.php");

class articlesController
{

    private $id;
    private $titre;
    private $contenu;
    private $image;
    private $vue;
    private $id_user;
    private $id_categorie;

    private $model;
    private $categoriesModel;

    public function __construct()
    {
        $this->model = new articlesModel;
        $this->categoriesModel = new categoriesModel;
        
    }

    public function getArticlesByCatId()
    {
        //    $this->model->getArticles(); // articlesModel
        //    $this->getArticles(); // articlesController

        $articles = $this->model->getArticlesByCatId(); // tableaux
        include('view/articlesView.php');
    }

    public function getDernierArticles()
    {
        $dernierArticles = $this->model->getDernierArticles();
        include('view/dernierArticlesViews.php');
    }



    public function getArticleById($id)
    {
        $article = $this->model->getArticleById($id); // tableaux

        include('view/articleView.php');
        include('view/formComments.php');
    }

    public function getArticleByCat($id)
    {
        $articles = $this->model->getArticleByCat($id); // tableaux
        include('view/articlesView.php');
    }


    public function formAjoutArticle()
    {
         $categories = new categoriesController;
        $menu = $categories->getCategories();
        include('view/formAjoutArticle.php');
    }


    public function setArticle()
    {
       

        $ajout = $this->model->setArticle($_POST['titre'], $_POST['contenu'], $_POST['image'], $_SESSION['id_user'],$_POST['id_categorie']);

        if ($ajout) {
            echo 'ajoute';
            
           // header("location:index.php?p=categorie&id=".$_POST['id_categorie']);
        } else {
            $this->formAjoutArticle();
        }
    }

    public function deleteArticle($id)
    {
      return $this->model->deleteArticle($id);
      
    }
}
