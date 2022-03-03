<?php

    include_once("./../Classes/createInstanceFunctions.php");
    include_once("./../Controllers/mainController.php");

    class NewsletterController extends MainController {
        
        
        private $createFunction = "createNewsletter";

        function __construct() {
            parent::__construct("Newsletter", "Newsletter");
        }
    
        public function getAll() {
            return $this->database->fetchAll($this->createFunction);
        }
    
        public function getById($ID) {
            return $this->database->fetchById($ID, $this->createFunction);
        }

    }

?>