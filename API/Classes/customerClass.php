<?php

class Customer {

    public $ID;
    public $firstName;
    public $lastName;
    public $adress;
    public $terms;

    function __construct($ID, $firstName, $lastName, $adress, $terms) {

        $this->ID = $ID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->adress = $adress;
        $this->terms = $terms;

    }
}


?>