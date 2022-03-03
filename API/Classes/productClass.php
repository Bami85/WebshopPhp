<?php

Class Product {

    public $productid;
    public $productName;
    public $unitPrice;
    public $unitsInStock;
    public $description;

<<<<<<< Updated upstream
    function __construct($productid, $productName, $unitPrice, $unitsInStock , $description) {
=======
    function __construct($ID, $productName, $unitPrice, $unitsInStock, $image) {
>>>>>>> Stashed changes

        $this->productid = $productid;
        $this->productName = $productName;
        $this->unitPrice = $unitPrice;
        $this->unitsInStock = $unitsInStock;
        $this->description = $description;
    }
}

?>