<?php


switch (@$_GET['p']) {
        // index.php?p=articles
    case 'formAjoutArticle':
        $articles = new articlesController;
        if (isset($_POST['titre'])) {
            $articles->setArticle();
        } else {
            $articles->formAjoutArticle();
        }
        break;

    case 'contact':
        $contact = new contactController;
        if (isset($_POST['nom'])) {
            $contact->setContact();
        } else {
            $contact->formContact();
        }
        break;



    case 'index':
        $articles = new articlesController;
        //$articles->getArticles();
        $articles->getArticlesByCatId();
        $articles->getDernierArticles();



        break;
        // index.php?p=article&id=1  
    case 'article':
        $articles = new articlesController;

        $articles->getArticleById($_GET['id']);
        
        
     

        break;
        // index.php?p=article&id=1

    case 'categorie':
        $articles = new articlesController;
        $articles->getArticleByCat($_GET['id']);

        break;


    case 'inscription':
        $user = new usersController;
        if (isset($_POST['nom'])) {
            $user->setUser();
        } else {
            $user->formInscription();
        }
        break;
    case 'connexion':
        $user = new usersController;
        if (isset($_POST['email'])) {
            $user->connexion();
        } else {
            $user->formConnexion();
        }
        break;
    case 'deconnexion':
        $_SESSION = [];
        header("location:index.php");
        break;

    case 'delete':
        $article = new articlesController;
        $article->deleteArticle($_POST['deleteArticle']);
        $query_params = parse_url($_SERVER['HTTP_REFERER'])["query"];
        header("location:index.php?" . $query_params);


        break;

    case 'addCommentForm':
        $comments = new commentsController;
        if (isset($_POST['review'])) {
            $comments->setComments();
        }else{
            $comments->formComments();
        }

        break;

    case 'comments':
        $comments = new commentsController;
        $comments->getComments($id);
        break;
        

     



    default:
        $articles = new articlesController;
        $articles->getArticlesByCatId();
        $articles->getDernierArticles();
        break;
}

/*
if (@$_GET['p'] == 'articles') {
$articles = new articlesController;
$articles->getArticles();
} else if (@$_GET['p'] == 'article') {
$articles = new articlesController;
$articles->getArticleById($_GET['id']);
} else if (@$_GET['p'] == 'categorie') {
$articles = new articlesController;
$articles->getArticleByCat($_GET['id']);
} else {
$articles = new articlesController;
$articles->getArticles();
}
*/