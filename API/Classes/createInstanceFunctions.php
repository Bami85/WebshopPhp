<?php

include_once("./../classes/productClass.php");
include_once("./../classes/ordersClass.php");
include_once("./../classes/customerClass.php");
include_once("./../classes/newsletterClass.php");
include_once("./../classes/categoryClass.php");


function createProduct($ID, $productName, $unitPrice, $unitsInStock, $image) {
    return new Product((int)$ID, $productName, $unitPrice, $unitsInStock, $image);
}


function createCategory($ID, $categoryName) {
    return new Category((int)$ID, $categoryName);
}


function createOrder($ID, $firstName, $lastName, $adress, $terms) {
    return new Customer((int)$ID, $firstName, $lastName, $adress, $terms);
}


function createCustomer($ID, $email, $name) {
    return new Newsletter((int)$ID, $email, $name);
}


function createNewsletter($ID, $shippingID, $customerID, $orderSum) {
    return new Orders((int)$ID, $shippingID, $customerID, $orderSum);
}


?>
