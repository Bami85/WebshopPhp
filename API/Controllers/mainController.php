<?php

include_once("./../classes/databaseClass.php");

abstract class MainController {

    public $database;

    function __construct($table, $class) {
        $this->database = new Database($table, $class);
    }

    abstract function getAll();
    abstract function getById($ID);

}

?>