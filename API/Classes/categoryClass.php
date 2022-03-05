<?php

Class Category {

    public $ID;
    public $categoryName;
    public $categoryImg;


    function __construct($ID, $categoryName, $categoryImg) {

        $this->ID = $ID;
        $this->categoryName = $categoryName;
        $this->categoryImg = $categoryImg;

    }
}

?>