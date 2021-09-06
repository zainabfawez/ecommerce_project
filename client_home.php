<?php

    session_start();
    $full_name= $_SESSION["full_name"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classimax</title>

    <!-- FAVICON -->
    <link href="img/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aaafc6df51.js" crossorigin="anonymous"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link login-button" href="index.html">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link login-button" href="index.html">logout</a>
                                </li>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--===================================
=            Categories Section        =
====================================-->

    <section class="client-slider-03">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <!-- Client Slider -->
                <div class="col-md-12">
                    <!-- Client Slider -->
                    <div class="category-slider">

                        <div class="item" >
                            <a href="#" id="3">
                                <!-- Slider Image -->
                                <i class="fas fa-tshirt"></i>
                                <h4>clothes</h4>
                            </a>
                        </div>


                        <div class="item" >
                            <a href="#" id= "1">
                                <!-- Slider Image -->
                                <i class="fas fa-laptop"></i>
                                <h4>Electronics</h4>
                            </a>
                        </div>


                        <div class="item" >
                            <a href="#" id= "2">
                                <!-- Slider Image -->
                                <i class="fas fa-utensils"></i>
                                <h4>food</h4>
                            </a>
                        </div>
                        <div class="item" >
                            <a href="#" id="3">
                                <!-- Slider Image -->
                                <i class="fas fa-tshirt"></i>
                                <h4>clothes</h4>
                            </a>
                        </div>


                        <div class="item" >
                            <a href="#" id= "1">
                                <!-- Slider Image -->
                                <i class="fas fa-laptop"></i>
                                <h4>Electronics</h4>
                            </a>
                        </div>


                        <div class="item" >
                            <a href="#" id= "2">
                                <!-- Slider Image -->
                                <i class="fas fa-utensils"></i>
                                <h4>food</h4>
                            </a>
                        </div>
                        <div class="item" >
                            <a href="#" id="3">
                                <!-- Slider Image -->
                                <i class="fas fa-tshirt"></i>
                                <h4>clothes</h4>
                            </a>
                        </div>


                        <div class="item" >
                            <a href="#" id= "1">
                                <!-- Slider Image -->
                                <i class="fas fa-laptop"></i>
                                <h4>Electronics</h4>
                            </a>
                        </div>


                        <div class="item" >
                            <a href="#" id= "2">
                                <!-- Slider Image -->
                                <i class="fas fa-utensils"></i>
                                <h4>food</h4>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <!--==================================
=            User Profile            =
===================================-->
    <section class="dashboard section">
        <!-- Container Start -->
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                    <div class="sidebar">
                        <!-- User Widget -->
                        <div class="widget user-dashboard-profile">
                            <!-- User Image -->
                            <div class="profile-thumb">
                                <img src="client.jfif" alt="" class="rounded-circle">
                            </div>
                            <!-- User Name -->
                            <h5 class="text-center" id="client_name"><?php echo $full_name; ?></h5>

                            <a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
                        </div>

                    </div>
                </div>
                <!-- revealing items-->
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                    <!-- Recently Favorited -->
                    <div class="widget dashboard-container my-adslist">
                      
                        <table class="table table-responsive product-dashboard-table">
                            <thead>
                                <tr>
                                    <th class="text-center" id="store_name">displaying store and items according to the category chosen</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr id= "store_items">

                                   
                                       
                                    <td class="product-details" >
                                        <h3 class="title"></h3>   
                                    </td>
                                    <td class="product-category"></td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <!-- pagination -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>




    <!-- this is my script-->
    <script src="client_home.js"></script>

    <!-- JAVASCRIPTS -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
    <!-- tether js -->
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src="js/script.js"></script>
    
</body>

</html>