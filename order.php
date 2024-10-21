<?php
    include 'components/connection.php';
    session_start();

     if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
     }else{
        $user_id = '';
     }

     if (isset($_POST['logout'])) {
         session_destroy();
         header("location: login.php");
     }

?>

<style type="text/css">
    <?php include 'style.css';?>
</style>

<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title> Super Market - order page </title>
</head>
<body>
    <?php include 'components/header.php';?>
    <div class="main">

         <div class="banner">
            <h1>Your order has placed ...!</h1>
       </div>
       <div class="title2">
            <a href="home.php"> home </a> <span> my order</span>
       </div>

       <section class="productss">
        <div class="box-container">
            <div class="title">
                <img src="images/logo1.png" class="logo">
                <h1>Thank you for shopping with Star Mart ...!</h1>
                <hr>
                <p>Your order has been successfully placed and is now being processed. Our dedicated team is working diligently to ensure that your items are carefully picked and packed for a seamless delivery experience. You will receive an email confirmation shortly with all the details of your order. We appreciate your trust in us and look forward to serving you again in the future. If you have any questions or need assistance, please don't hesitate to contact our <a href="contact.php">customer support</a> team. Happy shopping...!</p>
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