<?php

    include "connection.php";
    session_start();

    $name_store=$_SESSION["name_store"];

    $sql1="Select i.* from items i ,stores s where s.id=i.store_id AND s.name=? "; 
    $stmt1 = $connection->prepare($sql1);
    $stmt1->bind_param("s",$name_store);
    $stmt1->execute();
    $result = $stmt1->get_result();
    $row = $result -> fetch_array(MYSQLI_NUM);

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
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="store_home_html.php">back</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="index.html">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="ad-post bg-gray py-5">
        <div class="container">
            <form action="add_item.php" method="POST">
                <!-- Post Your ad start -->
                <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Post Your Item</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Item's Name:</h6>
                            <div class="category-search-filter">
                          
                                <select>
                                    <?php for($i=0; $i< $row.length; $i++){
                                        echo ' 
                                        <option>'.$row[$i].'</option>';
                                        
                                    }
                                    ?>
                                </select>
                            </div>


                            <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                            <input required name="description" id="description" class="border p-3 w-100" rows="7" placeholder="Write details about your product"></textarea>
                        </div>
                        <div class="col-lg-6">

                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1">Item Price ($ USD):</h6>
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <input required type="text" name="price" class="border-0 py-2 w-100 price" placeholder="Price" id="price" name="price">
                                    </div>
                                </div>

                            </div>
                            <h6 class="font-weight-bold pt-4 pb-1">Item Quantity:</h6>
                            <div class="quantity">
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <input required type="text" name="quantity" class="border-0 py-2 w-100 price" placeholder="Quantity" id="quantity" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="checkbox d-inline-flex">
                    <input required type="checkbox" id="terms-&-condition" class="mt-1" name="terms">
                    <label for="terms-&-condition" class="ml-2">By click you must agree with our
                        <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting Rules.</a></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary d-block mt-2">Post Your Item</button>
            </form>
        </div>
    </section>




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