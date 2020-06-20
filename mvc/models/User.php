<?php

class User implements IInitialisation
{
    protected $id;
    protected $nomComplet;
    protected $login;
    protected $pwd;
    protected $profil;

    public function __construct($array=null)
    {
        if($array!=null){
            $this->init($array);
        }
    }

    public function init($array)
    {
        $this->id = $array['id'];
        $this->nomComplet = $array['nomComplet'];
        $this->login = $array['login'];
        $this->pwd = $array['pwd'];
        $this->profil = $array['profil'];
        
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
         $this->id = $id;
    }
    public function getProfil()
    {
        return $this->profil;
    }
    public function setProfil($profil)
    {
         $this->profil = $profil;
    }
    public function getNomComplet()
    {
        return $this->nomComplet;
    }
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getPwd()
    {
        return $this->pwd;
    }
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }
}