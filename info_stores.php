<?php
    session_start();
    include "connection.php";

    if(isset($_POST["name"]) && $_POST["name"] != ""  &&  strlen($_POST["name"]) >= 3) {
        $name = $_POST["name"];
    }else{
        die ("Your name must be greater than 3 letters");
    }

    if(isset($_POST["country"]) && $_POST["country"] != "" ) {
        $country = $_POST["country"];
    }else{
        die ("Enter your country");
    }
    if(isset($_POST["city"]) && $_POST["city"] != "" ) {
        $city = $_POST["city"];
    }else{
        die ("Enter your city");
    }

    if (isset($_POST["categories"])){
        if (!empty($_POST["categories"])){
            $category=$_POST["categories"];
        }
    }


    $password=$_SESSION["password"];
    $email=$_SESSION["email"];
    $sql2 = "INSERT INTO `stores` (`email`,`password`,`name`, `country`, `city`,`category_id`) VALUES (?, ?, ?, ?, ?,?);";
    $hash = hash('sha256', $password);
    $stmt2 = $connection->prepare($sql2);
    $stmt2->bind_param("ssssss",$email,$hash,$name,$country,$city,$category);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $_SESSION["name"]=$name;
    $_SESSION["country"]=$country;
    $_SESSION["city"]=$city;


    header('location: store_home_html.php');

?>
