<?php

abstract class Manager implements IDao
{
    private $pdo=null;
    protected $tableName;
    protected $className;

    public function __construct(){
        $this->tableName = $tableName;
        $this->className = $className;
    }
    //connexion
    private function getConnexion(){
        if($this->pdo == null){
            try {
                $this->$pdo = new PDO('mysql:host=localhost;dbname=academy', 'root', ' ');
                $this->$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("erreur de connexion");
            }
        }
    }
    //clos
    private function closeConnexion(){
        if($this->pdo != null)
        {
            $this->pdo = null;
        }
    }
    //mise a jour
    public function executeUpdate($sql){
        $this->getConnexion();
        $row = $this->pdo->exec($sql);
        $this->closeConnexion();

        return $row;
    }

    //mise a jour
    public function executeQuery($sql){

        $this->getConnexion();
        $result = $this->pdo->query($sql);
        $donnees = array();
        foreach ($result as $ligne) {
           //ORM transforme data from database in object 
            $donnees[] = new $this->className($ligne);

        }

        $this->closeConnexion();

        return $donnees;

    }

    //supprimer row dans une table
    public function delete($id)
    {
        $sql = "delete  from $this->tableName where id = $id"; 
        return $this->executeQuery($sql);
    }
    //recupere tout les données d'une table
    public function all()
    {
        $sql = "select * from $this->tableName";
        return $this->executeQuery($sql);
    }
    //rechercher en fonction de l'id
    public function findById($id)
    {
        $sql = "select * from $this->tableName where id = $id";
        return $this->executeQuery($sql);
    }
}