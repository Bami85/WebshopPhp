<?php

Class Category {
    public $ID;
    public $categoryName;

    function __construct($ID, $categoryName, $description) {

        $this->ID = $ID;
        $this->categoryName = $categoryName;
    }
}

?>