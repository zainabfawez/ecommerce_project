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


                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="client_home.php">back</a>
                                    </li>

                                </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--==================================
=            User Profile            =
===================================-->

    <section class="user-profile section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                    <div class="sidebar">

                        <div class="widget user">

                            <div class="image d-flex justify-content-center">
                                <img src="client.jfif" alt="" class="">
                            </div>

                            <h5 class="text-center" id="client_name"><?php echo $full_name ?></h5>
                        </div>

                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">

                    <div class="widget welcome-message">
                        <h2>Edit Profile</h2>
                    </div>
                    <!-- Edit Personal Info -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="widget personal-info">
                                <h3 class="widget-header user">Edit Personal Information</h3>
                                <form action="saveMyChanges.php" method="POST">
                                    <!-- First Name -->
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" class="form-control" id="first-name" name="fname">
                                    </div>
                                    <!-- Last Name -->
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" class="form-control" id="last-name" name="lname">
                                    </div>
                                    <!-- Submit button -->
                                    <button class="btn btn-transparent" type="submit">Save My Changes</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Change Password -->
                            <div class="widget change-password">
                                <h3 class="widget-header user">Edit Password</h3>
                                <form action="changePassword.php" method="POST">
                                    <!-- Current Password -->
                                    <div class="form-group">
                                        <label for="current-password">Current Password</label>
                                        <input required type="password" class="form-control" id="current-password" name="current-password">
                                    </div>
                                    <!-- New Password -->
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input required type="password" class="form-control" id="new-password" name="new-password">
                                    </div>
                                    <!-- Confirm New Password -->
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm New Password</label>
                                        <input required type="password" class="form-control" id="confirm-password" name="confirm-password">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class="btn btn-transparent" type="submit">Change Password</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Change Email Address -->
                            <div class="widget change-email mb-0">
                                <h3 class="widget-header user">Edit Email Address</h3>
                                <form action="changeEmail.php" method="POST">
                                    <!-- Current email -->
                                    <div class="form-group">
                                        <label for="current-email">Current Email</label>
                                        <input type="email" class="form-control" id="current-email" name="current-email">
                                    </div>
                                    <!-- New email -->
                                    <div class="form-group">
                                        <label for="new-email">New email</label>
                                        <input type="email" class="form-control" id="new-email" name="new-email">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class="btn btn-transparent" type="submit">Change email</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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