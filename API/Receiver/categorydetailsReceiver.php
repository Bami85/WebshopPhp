<?php

// try{

//     include_once("./../Controllers/categorydetailsController.php");

//     if($_SERVER["REQUEST_METHOD"] == "GET") {

//         if($_GET["action"] == "getCategoryID") {

//             $controller = new CategorydetailsController();
//             echo(json_encode($controller->getCategoryID(int)$_GET["categoryID"]));
//             exit;

//         }else if($_GET["action"] == "getCategoryProductID") {

//             $controller = new CategorydetailsController();
//             echo(json_encode($controller->getCategoryProductID((int)$_GET["productID"])));

//             if(!isset($_GET["ID"])) {
//                 throw new Exception("Missing ID", 501);
//                 exit;
//             }
//         }
//     }


// }catch(Exception $e) {
//     echo json_encode(array("Message" => $e->getMessage(), "Status" => $e->getCode()));
// }

?>