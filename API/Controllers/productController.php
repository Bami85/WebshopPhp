<?php


include_once("./../classes/createInstanceFunctions.php");
include_once("./../controllers/mainController.php");

class ProductController extends MainController {

    private $createFunction = "createProduct";

    function __construct() {
        parent::__construct("Products", "Product");
    }

    public function getAll() {
        return $this->database->fetchAll($this->createFunction);
    }        
<<<<<<< Updated upstream
    
    public function getById($productid) {
        return $this->database->fetchById($productid, $this->createFunction);
=======

    public function getById($ID) {
        return $this->database->fetchById($ID, $this->createFunction);
>>>>>>> Stashed changes
    }

}

?>