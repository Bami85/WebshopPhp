<?php

class Newsletter {

    public $newsletterId;
    public $email;
    public $name;

    function __construct($newsletterId, $email, $name) {

        $this->newsletterId = $newsletterId;
        $this->email = $email;
        $this->name = $name;
    }
}

?>