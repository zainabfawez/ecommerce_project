<?php
session_start();
include "connection.php";

if(isset($_POST["fname"]) && $_POST["fname"] != ""  &&  strlen($_POST["fname"]) >= 3) {
    $fname = $_POST["fname"];
}else{
    die ("Your name must be greater than 3 letters");
}
if(isset($_POST["lname"]) && $_POST["lname"] != "" && strlen($_POST["lname"]) >= 3) {
    $lname = $_POST["lname"];
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
if(isset($_POST["street"]) && $_POST["street"] != "" ) {
    $street = $_POST["street"];
}else{
    die ("Enter your street");
}


$password=$_SESSION["password"];
$email=$_SESSION["email"];
$sql2 = "INSERT INTO `clients` (`email`,`password`,`first_name`, `last_name`, `country`, `city`, `street`) VALUES ( ?, ?, ?, ?, ?, ?,?);";
$hash = hash('sha256', $password);
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("sssssss",$email,$hash,$fname,$lname,$country,$city,$street);
$stmt2->execute();
$result2 = $stmt2->get_result();
header('location: login.html');



?>