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
       <section class="home-section">
           <div class="slider">
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide3">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide4">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide5">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide6">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide7">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide8">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide9">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide10">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome star mart...!</h1>
                        <p>At Star Mart, your one-stop shop for quality, savings, and variety, we've got it all.</p>
                        <a href="products.php" class="btn"> Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
           </section>
            <!-- home slider end -->

            <section class="topic">
                <div class="box">
                    <h1>Shop by Category</h1>
                </div>
            </section>

            <section class="thumb">
                <div class="box-container">
                    <div class="box">
                        <img src="images/cat-1.png" >
                        <h3> Homeware Items </h3>
                        <a href="homeware.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/cat-2.png" >
                        <h3> Snacks </h3>
                        <a href="snacks.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/cat-3.png" >
                        <h3> Baverages </h3>
                        <a href="Baverages.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/cat-4.png" >
                        <h3> Vegetables </h3>
                        <a href="Vegetables.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                </div>
            </section>

            <section class="thumb-1">
                <div class="box-container">
                    <div class="box">
                        <img src="images/cat-5.png" >
                        <h3> Groceries </h3>
                        <a href="Groceries.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/cat-6.png" >
                        <h3> Fresh Meats </h3>
                        <a href="freshmeats.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/cat-7.png" >
                        <h3> Beauty Picks </h3>
                        <a href="beautypicks.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                </div>
            </section>
            <section class="container">
                <div class="box">
                    <img src="images/ad-10.png">
                </div>
                <div class="box">
                    <h1>Save up to 50% off</h1>
                </div>
            </section>
            <section class="shop">
                <div class="title">

                </div>
            </section>

            <section class="topic">
                <div class="box">
                    <h1>Shop by Brand</h1>
                </div>
            </section>      

            <section class="thumb-2">
                <div class="box-container">
                    <div class="box">
                        <img src="images/brand-1.png" >
                        <h3> Goldi </h3>
                        <a href="goldi.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/brand-2.png" >
                        <h3> Kist </h3>
                        <a href="kist.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/brand-3.png" >
                        <h3> Magic </h3>
                        <a href="magic.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/brand-4.png" >
                        <h3> Kotmale </h3>
                        <a href="kotmale.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                </div>
            </section>

              <section class="thumb-3">
                <div class="box-container">
                    <div class="box">
                        <img src="images/brand-5.png" >
                        <h3> Baby Cheramy </h3>
                        <a href="babycheramy.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/brand-6.png" >
                        <h3> Dove </h3>
                        <a href="dove.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                     <div class="box">
                        <img src="images/brand-7.png" >
                        <h3> Munchee </h3>
                        <a href="munchee.php"><i class="bx bx-chevron-right"> </i></a>
                    </div>
                </div>
            </section>

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



            <?php include 'components/footer.php';?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script> 
    <script src="script.js"></script>
    <?php include 'components/alert.php';?>
</body>
</html>