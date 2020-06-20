<?php

class Joueur extends User
{
    private $score;
    public function __construct($array=null){
        $this->profil = "joueur";
        if($array!=null){
            $this->init($array);
            $this->score=$array['score'];
        }
        
    }

   

    //redefinitionn de lA METHODE
    public function setProfil($profil)
    {
        //meme si on modifie le profil  du joueur rien ne va se passer
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
         $this->score = $score;
    }
}