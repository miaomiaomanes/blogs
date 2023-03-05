<?php

class usersModel
{
 
  
    private $db;

    public function __construct()
    {
        $this->db = BDD::connexion();
    }
   

    public function getUserByEmail($email)
    {
        $sql = "SELECT users.*, roles. * FROM users
        LEFT JOIN affecter ON affecter.id_user=users.id_user
        LEFT JOIN roles ON affecter.id_role = roles.id_role
        where users.email='$email'";

    
        return $this->db->query($sql)->fetch();
    }


    public function setUser($nom,$prenom,$email,$tel,$mdp)
    {
        $ajout= $this->db->prepare("INSERT INTO users(nom,prenom,email,tel,mdp) VALUES(?,?,?,?,?)");      
        return $ajout->execute([$nom,$prenom,$email,$tel,$mdp]); // true/false
        
    }
  



}
