<?php

class UserDao extends Manager
{
    public function __construct()
    {
        $this->tableName = 'user';
        $this->className = 'User';
    }

    public function add($obj)
    {
        $sql= "";
        return $this->executeUpdate($sql)!=0;
        
    }
    public function update($obj)
    {
        
    }
    public function findByLoginAndPwd($login,$pwd)
    {
        $sql= "SELECT * FROM $this->tableName where login= '$login' AND pwd = '$pwd' ";
        return $this->executeQuery($sql);
    }
}
