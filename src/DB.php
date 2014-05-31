<?php

class DB{

    private $connection;

    public function __construct(){
        $this->connection = new PDO("mysql:host=localhost;dbname=wbs_training", "root", "");
    }

    public function getConnection(){
        return $this->connection;
    }

    public function executeQuery($query){
        $sth = $this->connection->query($query);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;
    }

}