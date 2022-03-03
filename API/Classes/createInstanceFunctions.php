<?php

<<<<<<< Updated upstream

include_once("./../Classes/productClass.php");
include_once("./../Classes/ordersClass.php");
include_once("./../Classes/customerClass.php");
include_once("./../Classes/newsletterClass.php");
=======
include_once("./../classes/productClass.php");
include_once("./../classes/ordersClass.php");
include_once("./../classes/customerClass.php");
include_once("./../classes/newsletterClass.php");
include_once("./../classes/categoryClass.php");
>>>>>>> Stashed changes


function createProduct($productid, $productName, $unitPrice, $unitsInStock, $description) {
    return new Product((int)$productid, $productName, $unitPrice, $unitsInStock, $description);
}


function createCategory($categoryid, $categoryName, $description) {
    return new Category((int)$categoryid, $categoryName, $description);
}


function createOrders($orderid, $shippingName, $adress) {
    return new Orders((int)$orderid, $shippingName, $adress);
}


function createCustomer($customerid, $username, $email, $adress) {
    return new Customer((int)$customerid, $username, $email, $adress);
}


function createNewsletter($newsletterid, $email, $name) {
    return new Newsletter((int)$newsletterid, $email, $name);
}


?>