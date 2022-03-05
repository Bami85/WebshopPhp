<?php

include_once("./../classes/productClass.php");
include_once("./../classes/ordersClass.php");
include_once("./../classes/customerClass.php");
include_once("./../classes/newsletterClass.php");
include_once("./../classes/categoryClass.php");
include_once("./../classes/categorydetailsClass.php");


function createProduct($ID, $productName, $unitPrice, $unitsInStock, $image) {
    return new Product((int)$ID, $productName, $unitPrice, $unitsInStock, $image);
}


function createCategory($ID, $categoryName, $categoryImg) {
    return new Category((int)$ID, $categoryName, $categoryImg);
}


function createCategoryDetails($productID, $categoryID, $categoryName) {
    return new CategoryDetails((int)$productID, (int)$categoryID, $categoryName);
}


function createOrders($ID, $shippingID, $customerID, $orderSum) {
    return new Orders((int)$ID, $shippingID, $customerID, $orderSum);
}


function createCustomer($ID, $firstName, $lastName, $adress, $terms) {
    return new Customer((int)$ID, $firstName, $lastName, $adress, $terms);
}


function createNewsletter($ID, $email, $name) {
    return new Newsletter((int)$ID, $email, $name);
}

?>
