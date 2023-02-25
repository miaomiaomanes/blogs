<?php


include_once("model/commentsModel.php");

class commentsController
{


    private $model;

    public function __construct()
    {
        $this->model = new commentsModel;
    }

    public function getComments($id)
    {
      $comments= $this->model->getComments($_SESSION['id_article']); // tableaux
      include("view/commentsReviews.php");
    


   

    //    include('view/menu.php');
    }

    public function formComments()
    {
        include('view/formComments.php');
    }

 public function setComments()
 {
    $this->model->setComment($_POST['review'],$_SESSION['id_user'],  $_POST['id_article']);
 }




}

