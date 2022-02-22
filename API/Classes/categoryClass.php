<?php

Class Category {

    public $categoryid;
    public $categoryName;
    public $description;


    function __construct($categoryid, $categoryName, $description) {

        $this->categoryid = $categoryid;
        $this->categoryName = $categoryName;
        $this->description = $description;

    }
}

?>