<?php

try{

    include_once("./../Controllers/productController.php");

    if($_SERVER["REQUEST_METHOD"] == "GET") {

        if($_GET["action"] == "getAll") {

            $controller = new ProductController();
            echo(json_encode($controller->getAll()));
            exit;

        }else if($_GET["action"] == "getById") {

            $controller = new ProductController();
            echo(json_encode($controller->getById((int)$_GET["ID"])));

            if(!isset($_GET["ID"])) {
                throw new Exception("Missing ID", 501);
                exit;
            }
        }
    }


}catch(Exception $e) {
    echo json_encode(array("Message" => $e->getMessage(), "Status" => $e->getCode()));
}


?>