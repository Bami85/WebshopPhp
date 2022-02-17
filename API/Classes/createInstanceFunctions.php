<?php

include_once("./../Classes/productClass.php");
include_once("./../Classes/ordersClass.php");
include_once("./../Classes/customerClass.php");
include_once("./../Classes/newsletterClass.php");


function createProduct($productid, $productName, $unitPrice, $unitsInStock, $description) {
    return new ProductClass((int)$productid, $productName, $unitPrice, $unitsInStock, $description);
}


function createCategory($categoryid, $categoryName, $description) {
    return new ProductClass((int)$categoryid, $categoryName, $description);
}


function createOrder($orderid, $shippingName, $adress) {
    return new OrderClass((int)$orderid, $shippingName, $adress);
}


function createCustomer($customerid, $username, $email, $adress) {
    return new ProductClass((int)$customerid, $username, $email, $adress);
}


function createNewsletter($newsletterid, $email, $name) {
    return new ProductClass((int)$newsletterid, $email, $name);
}


?>