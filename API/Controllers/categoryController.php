<?php

    include_once("./../Classes/createInstanceFunctions.php");
    include_once("./../Controllers/productController.php");
    include_once("./../Controllers/mainController.php");

    class CategoryController extends MainController {

        private $createFunction = "createCategory";

        function __construct() {
            parent::__construct("Categories", "Category");
        }
    
        public function getAll() {
            return $this->database->fetchAll($this->createFunction);
        }
    
        public function getById($categoryid) {
            return $this->database->fetchById($categoryid, $this->createFunction);
        }

    }

?>