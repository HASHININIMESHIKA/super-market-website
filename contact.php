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
            <h1>Contact Us</h1>
       </div>
       <div class="title2">
            <a href="home.php"> home </a> <span>Contact Us</span>
       </div>

        <section class="services">
                <div class="box-container">
                    <div class="box">
                        <img src="images/service-1.png">
                        <div class="detail">
                            <h3>Great savings</h3>
                            <p> Save big from every order</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="images/service-2.png">
                        <div class="detail">
                            <h3>24/7 service</h3>
                            <p> One-on-one service</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="images/service-3.png">
                        <div class="detail">
                            <h3>Gift vouchers</h3>
                            <p> vouchers on evey season</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="images/service-4.png">
                        <div class="detail">
                            <h3>Islandwide delivery</h3>
                            <p> Delivery Islandwide</p>
                        </div>
                    </div>
                </div>
        </section>

            <div class="form container">
                <form method="post">
                    <div class="title">
                        <hr>
                        <img src="images/logo1.png" class="logo">
                        <h1>Put a message</h1>
                        <hr>

                    </div>

                    <div class="input-field">
                        <p>Your full name :<sup>*</sup></p>
                        <input type="text" name="name">
                    </div>
                    <div class="input-field">
                        <p>Your email :<sup>*</sup></p>
                        <input type="email" name="email">
                    </div>
                    <div class="input-field">
                        <p>Your phone number :<sup>*</sup></p>
                        <input type="text" name="number">
                    </div>
                    <div class="input-field">
                        <p>Your message :<sup>*</sup></p>
                        <textarea name="message"> </textarea>
                    </div>
                    <button type="submit" name="submit-btn" class="btn">Send Message </button>
                </form>
                
            </div>
            <div class="address">
                    <div class="title">
                        <img src="images/logo1.png" class="logo">
                        <h1>Contact Details</h1>
                        <p>you can contact us via below methods</p>
                    </div>
                    <div class="box-container">
                        <div class="box">
                            <i class="bx bxs-map-pin"></i>
                            <div>
                                <h4>Address</h4>
                                <p>no:45/20 negombo, colombo </p>
                            </div>
                        </div>
                        <div class="box">
                            <i class="bx bxs-phone-call"></i>
                            <div>
                                <h4>Phone Number</h4>
                                <p>+94 1113323651</p>
                            </div>
                        </div>
                        <div class="box">
                            <i class="bx bxs-map-pin"></i>
                            <div>
                                <h4>Email</h4>
                                <p>starsuper@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
       
            <?php include 'components/footer.php';?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script> 
    <script src="script.js"></script>
    <?php include 'components/alert.php';?>
</body>
</html>