<?php

class Orders {

    public $orderId;
    public $shippingName;
    public $adress;

    function __construct($orderId, $shippingName, $adress) {
        $this->orderId = $orderId;
        $this->shippingName = $shippingName;
        $this->adress = $adress;
    }
}

?>