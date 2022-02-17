<?php

Class Product {

    public $productid;
    public $productName;
    public $unitPrice;
    public $unitsInStock;
    public $description;

    function __construct($productid, $productName, $unitPrice, $unitsInStock , $description) {

        $this->productid = $productid;
        $this->productName = $productName;
        $this->unitPrice = $unitPrice;
        $this->unitsInStock = $unitsInStock;
        $this->description = $description;
    }
}

?>