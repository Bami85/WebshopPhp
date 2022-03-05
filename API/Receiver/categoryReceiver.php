<?php

    include_once("./../Classes/createInstanceFunctions.php");
    include_once("./../Controllers/productController.php");
    include_once("./../Controllers/mainController.php");

    include_once("./../Controllers/categoryController.php");
    // include_once("./../Controllers/categorydetailsController.php");
    
    if($_SERVER["REQUEST_METHOD"] == "GET") {

        if($_GET["action"] == "getAll") {

            $controller = new CategoryController();
            echo(json_encode($controller->getAll()));
            exit;


        }else if($_GET["action"] == "getById") {

            $controller = new CategoryController();
            echo(json_encode($controller->getById((int)$_GET["ID"])));

            

            if(!isset($_GET["ID"])) {
                throw new Exception("Missing ID", 501);
                exit;
            }
        }

    }

// if($_GET["action"] == "getAllById") {
//     $categoryController = new CategoryController();
//     echo json_encode($categoryController->getAllProductsByCategory((int)$_GET["id"]));
//     exit;
// }

?>