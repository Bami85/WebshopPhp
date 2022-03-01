<?php

Class Product {

    public $id;
    public $productName;
    public $unitPrice;
    public $unitsInStock;
    public $image;

    function __construct($id, $productName, $unitPrice, $unitsInStock , $image) {

        $this->id = $id;
        $this->productName = $productName;
        $this->unitPrice = $unitPrice;
        $this->unitsInStock = $unitsInStock;
        $this->image = $image;
    }
}

?>