<?php

Class Product {

    public $ID;
    public $productName;
    public $unitPrice;
    public $unitsInStock;
    public $image;

    function __construct($ID, $productName, $unitPrice, $unitsInStock, $image) {

        $this->ID = $ID;
        $this->productName = $productName;
        $this->unitPrice = $unitPrice;
        $this->unitsInStock = $unitsInStock;
        $this->image = $image;
    }
}

?>