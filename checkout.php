<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}

if (isset($_POST['place_order'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['flat'] . ', ' . $_POST['street'] . ', ' . $_POST['city'] . ', ' . $_POST['Country'] . ', ' . $_POST['Pincode'];
    $address_type = $_POST['address_type'];
    $method = $_POST['method'];

    // Check if there's a product ID in the URL (e.g., when ordering a single product)
    if (isset($_GET['get_id'])) {
        $product_id = $_GET['get_id'];

        // Retrieve the product details based on the product_id
        $get_product = $conn->prepare("SELECT * FROM `products` WHERE id=? LIMIT 1");
        $get_product->execute([$product_id]);

        if ($get_product->rowCount() > 0) {
            $fetch_p = $get_product->fetch(PDO::FETCH_ASSOC);

            // Insert the order into the database
            $insert_order = $conn->prepare("INSERT INTO `orders` (id, user_id, name, number, email, address, address_type, method, product_id, price, qty) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Assuming unique_id() generates a unique order ID
            $order_id = unique_id();

            // Insert the order details into the database
            $insert_order->execute([$order_id, $user_id, $name, $number, $email, $address, $address_type, $method, $fetch_p['id'], $fetch_p['price'], 1]);

            // Redirect to the order confirmation page
            header('location: order.php');
        } else {
            $warning_msg[] = 'Something went wrong';
        }
    } else {
        // Handle ordering from the cart (similar to your original code)
        $varify_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id=?");
        $varify_cart->execute([$user_id]);

        if ($varify_cart->rowCount() > 0) {
            while ($f_cart = $varify_cart->fetch(PDO::FETCH_ASSOC)) {
                $select_product = $conn->prepare("SELECT * FROM `products` WHERE id=?");
                $select_product->execute([$f_cart['product_id']]);
                $fetch_product = $select_product->fetch(PDO::FETCH_ASSOC);

                // Insert the order into the database
                $insert_order = $conn->prepare("INSERT INTO `orders` (id, user_id, name, number, email, address, address_type, method, product_id, price, qty) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                // Assuming unique_id() generates a unique order ID
                $order_id = unique_id();

                // Insert the order details into the database
                $insert_order->execute([$order_id, $user_id, $name, $number, $email, $address, $address_type, $method, $fetch_product['id'], $fetch_product['price'], $f_cart['qty']]);
            }

            // Delete the items from the cart
            $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
            $delete_cart->execute([$user_id]);

            // Redirect to the order confirmation page
            header('location: order.php');
        } else {
            $warning_msg[] = 'Your cart is empty';
        }
    }
}
?>

<style type="text/css">
    <?php include 'style.css';?>
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title> Super Market - checkout page </title>
</head>
<body>
    <?php include 'components/header.php';?>
    <div class="main">

         <div class="banner">
            <h1>checkout summary</h1>
       </div>
       <div class="title2">
            <a href="home.php"> home </a> <span>checkout summary</span>
       </div>

       <section class="checkout">
            <div class="title">
                <img src="images/logo1.png" class="logo">
                <hr>
                <h1> Checkout Summary </h1>
                <hr>
                <p>We're delighted you've chosen us for your shopping needs. Here, you can review your selected items, quantities, and make any necessary adjustments before finalizing your order. Our commitment to providing top-quality products and excellent service ensures that your shopping experience with us is convenient and enjoyable. Thank you for shopping at Star Mart, where your satisfaction is our priority.</p>
            </div>
                <div class="row">
                    <form method="post">
                        <h3>Billing Details </h3>
                        <div class="flex">
                            <div class="box">
                                <div class="input-field ">
                                    <p>Your Name : <span>*</span> </p>
                                    <input type="text" name="name" required maxlength="50" placeholder="Enter Your Name" class="input">
                                </div>
                                <div class="input-field ">
                                    <p>Your Number : <span>*</span> </p>
                                    <input type="number" name="number" required maxlength="10" placeholder="Enter Your Number" class="input">
                                </div>
                                <div class="input-field ">
                                    <p>Your Email : <span>*</span> </p>
                                    <input type="email" name="email" required maxlength="50" placeholder="Enter Your Email" class="input">
                                </div>
                                <div class="input-field ">
                                    <p> Payment Method : <span>*</span> </p>
                                    <select name="Method" class="input"> 
                                        <option value="cash on delivery">cash on delivery </option>
                                        <!-- <option value="credit or debit card">credit or debit card </option>
                                        <option value="internet Banking">internet Banking </option> -->

                                    </select>
                                </div>
    
                                <div class="input-field ">
                                    <p>Address Type: <span>*</span> </p>
                                    <select name="Method" class="input"> 
                                        <option value="home">home</option>
                                        <option value="office">office</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="box">
                                <div class="input-field ">
                                    <p>Address line 01: <span>*</span> </p>
                                    <input type="text" name="flat" required maxlength="50" placeholder="e.g flat and building number" class="input">
                                </div>
                                <div class="input-field ">
                                    <p>Address line 02: <span>*</span> </p>
                                    <input type="text" name="street" required maxlength="50" placeholder="e.g street name" class="input">
                                </div>
                                <div class="input-field ">
                                    <p>City Name: <span>*</span> </p>
                                    <input type="text" name="city" required maxlength="50" placeholder="Enter your city name" class="input">
                                </div>
                                <div class="input-field ">
                                    <p>Country Name: <span>*</span> </p>
                                    <input type="text" name="Country" required maxlength="50" placeholder="e.g Enter your country name" class="input">
                                </div>
                                 <div class="input-field ">
                                    <p>Pincode : <span>*</span> </p>
                                    <input type="text" name="Pincode" required maxlength="6" placeholder="110022" min="0" max="999999" class="input">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="place_order" class="btn"> Place Order </button>
                    </form> 
                    <div class="summary">
                        <h3> My Bag </h3>
                        <div class="box-container">
                            <?php
                            $grand_total = 0;
                            if (isset($_GET['get_id'])) {
                                $select_get = $conn->prepare("SELECT * FROM `products` WHERE id=?");
                                $select_get->execute([$_GET['get_id']]);
                                while($fetch_get = $select_get->fetch(PDO::FETCH_ASSOC)){
                                    $sub_total = $fetch_get['price'];
                                    $grand_total+=$sub_total;

                            ?>

                            <div class="flex">
                                <img src="images/<?=$fetch_get['image']; ?>" class="image">
                                <div>
                                    <h3 class="name"><?=$fetch_get['name']; ?></h3>
                                    <p class="price"><?=$fetch_get['price']; ?>/- </p>
                                </div>
                            </div>
                            <?php 
                                    } 
                                 }else{
                                    $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id=?");
                                    $select_cart->execute([$user_id]);
                                    if ($select_cart->rowCount()>0) {
                                        while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
                                            $select_products=$conn->prepare("SELECT * FROM `products` WHERE id=?");
                                            $select_products->execute([$fetch_cart['product_id']]);
                                            $fetch_product = $select_products->fetch(PDO::FETCH_ASSOC);
                                            $sub_total=($fetch_cart['qty'] * $fetch_product['price']);
                                            $grand_total += $sub_total;
                                     
                            ?>
                            <div class="flex">
                                <img src="images/<?=$fetch_product['image']; ?>">
                                <div>
                                    <h3 class="name"><?=$fetch_product['name']; ?></h3>
                                    <p class="price"><?=$fetch_product['price']; ?> X <?=$fetch_cart['qty'];?></p>
                                </div>
                            </div>
                            <?php 
                                      }
                                    }else{
                                        echo '<p class="empty"> Your cart is empty </p>';
                                    }
                                 }
                            ?>
                        </div>
                        <div class="grand-total"> Total Amount payable : <p>LKR<span><?= $grand_total ?>/- </span> </p> </div>
                    </div>
            </div>
       </section>
       
        <?php include 'components/footer.php';?>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script> 
    <script src="script.js"></script>
    <?php include 'components/alert.php';?>
</body>
</html>