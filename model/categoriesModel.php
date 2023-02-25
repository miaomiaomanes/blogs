<?php

class categoriesModel
{
   
    private $db;

    public function __construct()
    {
        $this->db = BDD::connexion();
    }

    public function getCategories()
    {
        return $this->db->query("SELECT * FROM categories")->fetchAll();
    }

    // public function getCategoriesByName($categoryName)
    // {
    //   return $this->db->query("SELECT * FROM categories WHERE nom='$categoryName'")->fetch();
    // }
 
}