<?php

Class Database {

    public $db;
    public $selectedTable;
    public $selectedClass;

    function __construct($table, $class) {
<<<<<<< Updated upstream

        $dns = "mysql:host=localhost;dbname=appletechwebshop";
=======
        $dns = "mysql:host=localhost;dbname=appletech_webshop";
>>>>>>> Stashed changes
        $user = "root";
        $password = "root";

        $this->db = new PDO($dns, $user, $password);
        $this->db->exec("set names utf8");

<<<<<<< Updated upstream
        $this->DbTable->$table;
        $this->ApiClass->class;
=======
        $this->selectedTable = $table;
        $this->selectedClass = $class;
>>>>>>> Stashed changes
    }




    public function fetchAll( $createInstanceFunction) {
        $query = $this->db->prepare("SELECT * FROM " . $this->selectedTable . ";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_FUNC, $createInstanceFunction);
        if($result) {
            return $result; 
        }
        return $false;
 
    }


    public function fetchById($productid, $createInstanceFunction) {
        $query = $this->db->prepare("SELECT * FROM  " . $this->selectedTable . " WHERE productid=" . $productid . ";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_FUNC, $createInstanceFunction);

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        if(empty($result)) {
            throw new Exception($this->selectedClass . " with ID " . $productid . " is not found..", 500);
            exit;
        }

        return $result[0];

}



?>