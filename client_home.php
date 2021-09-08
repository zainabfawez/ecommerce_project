<?php

    include "connection.php";
    session_start();
    
    $full_name= $_SESSION["full_name"];
    

    $sql1="SELECT i.*, s.name as store_name from items as i, stores as s where s.id=i.store_id  "; 
    $stmt1 = $connection->prepare($sql1);
  
    $stmt1->execute();
    $result = $stmt1->get_result();


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
                                    <a class="nav-link login-button" href="logout.php">logout</a>
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
                            
                                <!-- Slider Image -->
                                <i class="fas fa-tshirt"></i>
                                <h4>clothes</h4>
                           
                        </div>


                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-laptop"></i>
                                <h4>Electronics</h4>
                            
                        </div>


                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-utensils"></i>
                                <h4>food</h4>
                            
                        </div>
                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-tshirt"></i>
                                <h4>clothes</h4>
                            
                        </div>


                        <div class="item" >
                          
                                <!-- Slider Image -->
                                <i class="fas fa-laptop"></i>
                                <h4>Electronics</h4>
                           
                        </div>


                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-utensils"></i>
                                <h4>food</h4>
                           
                        </div>
                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-tshirt"></i>
                                <h4>clothes</h4>
                           
                        </div>


                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-laptop"></i>
                                <h4>Electronics</h4>
                            
                        </div>


                        <div class="item" >
                            
                                <!-- Slider Image -->
                                <i class="fas fa-utensils"></i>
                                <h4>food</h4>
                            
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
                
                    <div class="sidebar">
                        <!-- User Widget -->
                        <div class="widget user-dashboard-profile">
                            <!-- User Image -->
                            <div class="profile-thumb">
                                <img src="client.jfif" alt="" class="rounded-circle">
                            </div>
                            <!-- User Name -->
                            <h5 class="text-center" id="client_name"><?php echo $full_name; ?></h5>
                            <a href="edit_profile.php" class="btn btn-main-sm">Edit Profile</a>
                        </div>
                    </div>
                
           
                <!-- revealing items-->
                                  
                <div class="widget dashboard-container my-adslist">
                      
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th >store</th>
                            <th >Buy</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php 
                                while($row=$result->fetch_assoc()){

                            ?>   
                        <tr>

                            <td class="product-thumb">
                                <?php echo $row["name"]; ?>
                            </td>

                            <td class="product-details">
                                <?php echo $row["description"]; ?>
                            </td>

                            <td class="product-details" align_text="center">
                                <?php echo $row["price"]; ?>
                            </td>

                            <td class="product-details" align_text="center" id= "<?php echo $row['id'];?> " >
                                <?php echo $row["quantity"]; ?>
                            </td>

                            <td class="product-details" >
                                <?php echo $row["store_name"]; ?>
                            </td>

                            <td>
                                <button class="buy d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold"  value= "<?php echo $row['id'];?> " > buy</button>
                            </td>
                        </tr>
                        
                        <?php      } ?>
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- pagination -->
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
    <script src= "script_buy.js"></script>
    
</body>

</html>