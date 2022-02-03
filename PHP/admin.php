<script src="Js/admin.js"></script>
<?php 

    include ('includes/header.php');
    
    
    if (!$userHandler->isAdmin()) {
		$_SESSION['msg'] = "You must be log in";
		header('location: login.php');
    }
?>
        <h1>Welcome to the Admin page</h1>
        
    <div id="buttons">
        <button onclick=viewOrders()>View orders</button>
        <button onclick=viewProducts()>Product list</button>
        <button onclick=viewSubscribers()>Subscribers</button>
        <a href="create_user.php"><button> Create New User</button></a>
    </div>
    <div id="content">
        <template id="orderTemp">
            <h4>Order:</h4>
            <table id ="orders">
                <tr>
                    <th>orderID</th>
                    <th>adress</th>
                </tr>
                <!-- Rows will inserted here -->
            </table>
        </template>
        <template id="productTemp">
            <h4>Products:</h4>
            <table id ="products">
                <tr>
                    <th>productID</th>
                    <th>name</th>
                    <th>Price</th>
                    <th>pris</th>
                    <th>img</th>
                    <th>antal</th>
                </tr>
                <!-- Rows will inserted here -->
            </table>
            <input type="text" placeholder="Välj produkt Id" id="productId">
            <input type="text" placeholder="Antal" id="units">
            <button onclick=updateStock()>Update stock balance</button>
        </template>
        <template id="newsTemp">
            <h4>Newsletter subscribers:</h4>
            <table id="newsletter">
                <tr>
                    <th>newsletterID</th>
                    <th>name</th>
                    <th>email</th>
                </tr>
                <!-- Rows will inserted here -->
            </table>
        </template>
    </div>
    </body>


    <?php include ('includes/footer.php') ?>