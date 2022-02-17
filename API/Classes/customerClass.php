<?php

class Customer {

    public $customerId;
    public $userName;
    public $email;
    public $adress;

    function __construct($customerId, $userName, $email, $adress) {

        $this->custoerId = $customerId;
        $this->userName = $userName;
        $this->email = $email;
        $this->adress = $adress;

    }
}


?>