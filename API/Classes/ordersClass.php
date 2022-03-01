<?php

class Orders {

    public $Id;
    public $shippingID;
    public $customerID;
    public $orderSum;

    function __construct($Id, $shippingID, $customerID, $orderSum) {
        $this->Id = $Id;
        $this->shippingID = $shippingID;
        $this->customerID = $customerID;
        $this->orderSum = $orderSum;
    }
}

?>