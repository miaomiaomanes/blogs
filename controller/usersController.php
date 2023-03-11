<?php

include_once('model/usersModel.php');

class usersController
{

    private $model;

    public function __construct()
    {
        $this->model = new usersModel;
    }

    public function formInscription()
    {
        include('view/inscription.php');
    }

    public function formConnexion()
    {
        include('view/connexion.php');
    }

    public function connexion()
    {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $user = $this->model->getUserByEmail($email);

        if (password_verify($mdp, $user['mdp'])) {
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['id_role'] = $user['id_role'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['password']=$user['mdp'];

            
             $redirectUrl = "index.php";
             echo "<script>location.href = '$redirectUrl';</script>";//redirection vers index.php
        } else {
            $this->formConnexion();
        }
    }

    public function setUser()
    {

        $ajout = $this->model->setUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], password_hash($_POST['mdp'], PASSWORD_DEFAULT));
        if ($ajout) {
            $redirectUrl = "index.php?p=connexion";
            echo "<script>location.href = '$redirectUrl';</script>";
        } else {
            $this->formInscription();
        }
    }



    /*
public function setArticle()
{
$this->titre = $_POST['titre'];
$this->contenu = $_POST['contenu'];
$this->image = $_POST['image'];
$this->id_user = $_POST['id_user'];
$this->id_categorie = $_POST['id_categorie'];
$ajout = $this->model->setArticle($this->titre, $this->contenu, $this->image, $this->id_user, $this->id_categorie);
if ($ajout) {
echo "Article ajouté";
} else {
$this->formAjoutArticle();
}
}
*/
}
