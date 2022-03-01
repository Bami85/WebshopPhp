<?php

    include_once("./../Classes/createInstanceFunctions.php");
    include_once("./../Controllers/mainController.php");

    class OrderController extends MainController {

        private $createFunction = "createOrder";

        function __construct() {
            parent::__construct("Orders", "Orders");
        }
    
        public function getAll() {
            return $this->db->fetchAll($this->createFunction);
        }        
        
        public function getById($ID) {
            return $this->db->fetchById($ID, $this->createFunction);
        }

    }

?>