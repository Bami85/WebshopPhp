<?php

class Orders {

    public $ID;
    public $shippingID;
    public $customerID;
    public $orderSum;
    
    function __construct($ID, $shippingID, $customerID, $orderSum) {
        $this->ID = $ID;
        $this->shippingID = $shippingID;
        $this->customerID = $customerID;
        $this->orderSum = $orderSum;
    }
}

?>