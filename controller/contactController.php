<?php

include_once('model/contactModel.php');

class contactController
{

    private $model;

    public function __construct()
    {
        $this->model = new contactModel;
    }

    public function formContact()
    {
        include('view/formContact.php');
    }

    public function setContact()
    {
        
        $ajout = $this->model->setConact($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message_text']);
        if ($ajout) {
            echo "sucessfully send your contact";
        } else {
            $this->formContact();
        }
    }
}