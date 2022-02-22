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
</div>
</div>

<div class="d-flex justify-content-between py-4 my-4 border-top">
<p>&copy; 2021 Company, Inc. All rights reserved.</p>
<ul class="list-unstyled d-flex">
  <li class="ms-3"><a class="link-white" href="#"><i class="lni lni-twitter-original"></i></a></li>
  <li class="ms-3"><a class="link-white" href="#"><i class="lni lni-instagram-original"></i></a></li>
  <li class="ms-3"><a class="link-white" href="#"><i class="lni lni-facebook-original"></i></a></li>
</ul>
</div>
</footer>
</div>
<!-- ---------------------------------------------footer--------------------------------------------------------- -->
<script src="./script/bootstrap.min.js"></script>
<script src="./Js/newsletter.js"></script>

</script>
</body>
</html>
