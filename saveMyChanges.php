<?php
include "connection.php";
session_start();

$email = $_SESSION["email_client"];

if(isset($_POST["fname"]) && $_POST["fname"] != "" ) {
    $fname = $_POST["fname"];
}else{
    die ("Enter your first name");
}

if(isset($_POST["lname"]) && $_POST["lname"] != "" ) {
    $lname = $_POST["lname"];
}else{
    die ("Enter your last name");
}



$query= "UPDATE `clients` SET `first_name`=?, `last_name`=? WHERE `email`=? ";
$stmt = $connection->prepare($query);
$stmt->bind_param("sss",$fname, $lname, $email );
$stmt->execute();
$result = $stmt->get_result();

header("Location: client_home.php");


?>