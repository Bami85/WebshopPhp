<?php

    include_once("./../Classes/createInstanceFunctions.php");
    include_once("./../Controllers/mainController.php");

    class OrderController extends MainController {

        private $createFunction = "createOrder";

        function __construct() {
            parent::__construct("Orders", "Orders");
        }
    
        public function getAll() {
            return $this->database->fetchAll($this->createFunction);
        }        
        
<<<<<<< Updated upstream
        public function getById($orderid) {
            return $this->database->fetchById($orderid, $this->createFunction);
=======
        public function getById($ID) {
            return $this->database->fetchById($ID, $this->createFunction);
>>>>>>> Stashed changes
        }

    }

?>