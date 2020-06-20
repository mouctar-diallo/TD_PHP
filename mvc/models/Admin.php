<?php 

class Admin extends User
{
    public function __construct($array=null)
    {
        $this->profil = "admin";
        if($array!=null){
            $this->init($array);
        }
    }
    //redefinitionn de lA METHODE
    public function setProfil($profil)
    {
        //meme si on modifie le profil  du joueur rien ne va se passer
    }
    
}