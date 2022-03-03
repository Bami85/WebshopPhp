<?php

Class Category {

    public $ID;
    public $categoryName;


    function __construct($ID, $categoryName) {

        $this->ID = $ID;
        $this->categoryName = $categoryName;

    }
}

?>