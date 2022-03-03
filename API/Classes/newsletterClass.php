<?php

class Newsletter {

    public $ID;
    public $email;
    public $name;

    function __construct($ID, $email, $name) {

        $this->ID = $ID;
        $this->email = $email;
        $this->name = $name;
    }
}

?>