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
    private $commentsModel;

    public function __construct()
    {
        $this->model = new articlesModel;
        $this->categoriesModel = new categoriesModel;
        $this->commentsModel = new commentsModel;
    }

    public function getArticlesByCatId()
    {
        //    $this->model->getArticles(); // articlesModel
        //    $this->getArticles(); // articlesController

        $articles = $this->model->getArticlesByCatId(); // tableaux
        include('view/articlesView.php');
    }

    // public function getDernierArticles()
    // {
    //      $this->model->getDernierArticles();

    // }



    public function getArticleById($id)
    {

        $article = $this->model->getArticleById($id);
        $dernierArticles = $this->model->getDernierArticles(); // tableaux
        $getComments = new commentsController;
        $comments = $getComments->getComments($id);
        include('view/articleViewFullPage.php');
    }

    public function getArticleByIdFullPage()
    {
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




    public function deleteArticle($id)
    {
        return $this->model->deleteArticle($id);
    }

    public function fileUpload()
    {
        //  var_dump($_FILES['fichier']);

        $fichier = explode('.', $_FILES['image']['name']);
     
        $extension = end($fichier); // recuperer l'extention du fichier ex : jpj png pdf ...

        $typeFichierTmp = mime_content_type($_FILES['image']['tmp_name']); // type du fichier ex: 'image/jpeg', 'image/png'

        $chemin = 'fichiers/' . microtime(true) . '.' . $extension; // le chemin et le nouveau nom de fichier 
        error_log($chemin);

        $typeFichierAccepter = ['image/jpeg', 'image/png'];
        $typeExtAccepter = ['jpg', 'png', 'gif'];

        // in_array(test,tab)

        if (in_array($typeFichierTmp, $typeFichierAccepter) && in_array($extension, $typeExtAccepter)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $chemin)) {
                return $chemin;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function setArticle()

    {
        
        $image = $this->fileUpload();

        $ajout = $this->model->setArticle($_POST['titre'], $_POST['contenu'], $image, $_SESSION['id_user'], $_POST['id_categorie']);
        if ($ajout) {
            $redirectUrl = "index.php?p=categorie&id=" . $_POST['id_categorie'];
            echo "<script>location.href = '$redirectUrl';</script>";
        } else {
            $this->formAjoutArticle();
        }
    }
}
