<?php

Class Database {

    public $db;
    public $selectedTable;
    public $selectedClass;

    function __construct($table, $class) {

        $dns = "mysql:host=localhost;dbname=appletechwebshop";
        $user = "root";
        $password = "root";

        $this->db = new PDO($dns, $user, $password);
        $this->db->exec("set names utf8");

        $this->DbTable->$table;
        $this->ApiClass->class;
    }

    public function fetchAll($createInstanceFunction) {
        $query = $this->db->prepare("SELECT * FROM ". $this->selectedTable);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_FUNC, $createInstanceFunction); 

        return $result;
    }


    public function fetchById($productid, $createInstanceFunction) {
        $query = $this->db->prepare("SELECT * FROM  " . $this->selectedTable . " WHERE productid=" . $productid . ";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_FUNC, $createInstanceFunction);


        if(empty($result)) {
            throw new Exception($this->selectedClass . " with ID " . $productid . " is not found..", 500);
            exit;
        }

        return $result[0];

}



?>