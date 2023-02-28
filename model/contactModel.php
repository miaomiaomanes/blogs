<?php

class contactModel
{
 
  
    private $db;

    public function __construct()
    {
        $this->db = BDD::connexion();
    }


    public function setConact($nom,$prenom,$email,$message_text)
    {
        $ajout= $this->db->prepare("INSERT INTO Contact(nom,prenom,email,message_text) VALUES(?,?,?,?)");      
        return $ajout->execute([$nom,$prenom,$email,$message_text]); // true/false
        
    }



}