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
        <title> Super Market - home page </title>
</head>
<body>
    <?php include 'components/header.php';?>
    <div class="main">

         <div class="banner">
            <h1>Star Mart's Privacy Policy</h1>
       </div>
       <div class="title2">
            <a href="home.php"> home </a> <span>Contact Us</span>
       </div>

       <section class="productss">
        <div class="box-container">
            <div class="title">
                <img src="images/logo1.png" class="logo">
                <h1>Guardians of Your Privacy</h1>
                <hr>
                <p>At Star Mart, we take your privacy and the security of your personal information seriously. This Privacy Policy outlines how we collect, use, disclose, and protect your data when you interact with our website. We collect only the information necessary to provide you with the best shopping experience and to fulfill your orders. Your data is stored securely and is never shared with third parties for marketing purposes. We use industry-standard security measures to safeguard your information. By using our website, you consent to the practices described in this Privacy Policy. We encourage you to read this policy carefully and <a href="contact.php">contact us</a> if you have any questions or concerns about your privacy.</p>
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