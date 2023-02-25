<?php
//$bdd = new PDO("mysql:host=localhost;dbname=news","root","root");

class BDD
{
    public static function connexion()
    {
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=nezs","root","root");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         // $bdd = new PDO("mysql:host=localhost;dbname=NOMBDD","LOGIN","MDP");
         //   echo "ok";
            return $bdd;
        }
        catch(Exception $e)
        {
            echo "Probleme BDD $e";
        }
    }
}
/*
$db = new BDD; //instantier
$db->connexion(); // executer la methode connexion()
*/
// $db = BDD::connexion();
