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
        <title> Super Market - about us page </title>
</head>
<body>
    <?php include 'components/header.php';?>
    <div class="main">
       <div class="banner">
            <h1>about us</h1>
       </div>
       <div class="title2">
            <a href="home.php"> home </a> <span>About Us</span>
       </div>

       <section class="services">
            <div class="title">
                <img src="images/logo1.png">
                <hr>
                <h1> Why Choose Us</h1>
                <hr>
                <p> At Star Mart, we stand out in the crowded marketplace for a multitude of reasons. Our unwavering commitment to quality, convenience, and customer satisfaction sets us apart. With a carefully curated selection of premium products, competitive prices, and a user-friendly shopping experience, we ensure that every visit to Star Mart is a delightful journey. We take pride in our dedicated team, always ready to go the extra mile to assist you. Our seamless online ordering process, speedy delivery, and hassle-free returns make shopping with us a breeze. Plus, our loyalty program rewards your continued trust with exclusive discounts and offers. When you choose Star Mart, you're not just choosing a supermarket; you're choosing a partner in your shopping endeavors. Join us in redefining the art of grocery shopping</p>
            </div>
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

            <div class="about">
                <div class="row">
                    <div class="img-box">
                        <img src="images/welcome.jpg">
                    </div>
                    <div class="detail">
                        <h1> Visit Our Showrooms!</h1>
                        <p>Discover the ultimate shopping destination at Star Super Supermarket! With a wide range of products and friendly staff, we provide a delightful and stress-free shopping experience. Join us today and experience the difference at Star Super Supermarket!</p>
                        <a href="products.php" class="btn"> Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="testimonial-container">
                <div class="title">
                    <h1> What people say about us</h1>
                    <hr>
                    <p>At Star Mart, your satisfaction is at the heart of everything we do. We believe in the power of your voice, and your feedback is invaluable to us. We're dedicated to continuously improving our services, and your opinions help us grow and serve you better. In this section, we proudly showcase the voices of our cherished customers, who have shared their experiences with us. Their stories and insights provide a glimpse into the Star Mart shopping journey, reflecting the trust and loyalty that drive us forward. We invite you to explore their feedback and consider joining the chorus of satisfied shoppers who have made Star Mart their supermarket of choice.</p>
                    <div class="container">
                        <div class="testimonial-item active">
                            <img src="images/male-icon.png">
                            <h1>Sunil Perera</h1>
                            <p>I love shopping at Star Super Supermarket! The store is always clean and well-organized, making it easy to find what I need. The staff is friendly and helpful, providing excellent customer service. I also appreciate the wide variety of products available, including fresh produce and a great selection of international foods. </p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="testimonial-item">
                            <img src="images/female-icon-1">
                            <h1>Kmala Fernando</h1>
                            <p> Star Super Supermarket is my go-to grocery store. The prices are competitive, and they often have great deals and discounts. I find the quality of their products to be consistently high, especially when it comes to their fresh meat and bakery items. Overall, it's a convenient and reliable place to shop for my everyday needs.</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="testimonial-item">
                            <img src="images/female-icon-2">
                            <h1>Asha Siriwardhana</h1>
                            <p>I recently discovered Star Super Supermarket, and I'm impressed! The store has a fantastic range of organic and health-conscious products, which is important to me and my family. The checkout process is efficient, and I appreciate the option to use their loyalty program for additional savings. It's become my preferred supermarket for buying organic groceries. </p>
                        </div>

                        <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                        <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                    </div>

                </div>



                <?php include 'components/footer.php';?>
            </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script> 
    <script src="script.js"></script>
    <?php include 'components/alert.php';?>
</body>
</html>