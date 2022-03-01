<?php

include_once("./../Classes/createInstanceFunctions.php");
include_once("./../Controllers/mainController.php");

class ProductController extends MainController {

    private $createFunction = "createProduct";

    function __construct() {
        parent::__construct("Product", "Product");
    }

    public function getAll() {
        return $this->database->fetchAll($this->createFunction);
    }        

    public function getById($ID) {
        return $this->database->fetchById($ID, $this->createFunction);
    }

}

?>