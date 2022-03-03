<?php

Class Database {

    public $db;
    public $selectedTable;
    public $selectedClass;

    function __construct($table, $class) {

        $dns = "mysql:host=localhost;dbname=appletech_webshop";
        $user = "root";
        $password = "root";

        $this->db = new PDO($dns, $user, $password);
        $this->db->exec("set names utf8");

        $this->selectedTable = $table;
        $this->selectedClass = $class;
    }




    public function fetchAll( $createInstanceFunction) {
        $query = $this->db->prepare("SELECT * FROM " . $this->selectedTable . ";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_FUNC, $createInstanceFunction);
        
        
        return $result;
 
    }


    public function fetchById($ID, $createInstanceFunction) {
        $query = $this->db->prepare("SELECT * FROM  " . $this->selectedTable . " WHERE ID=" . $ID . ";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_FUNC, $createInstanceFunction);

        if(empty($result)) {
            throw new Exception($this->selectedClass . " with ID " . $ID . " is not found..", 500);
            exit;
        }

        return $result[0];

        }

}

?>