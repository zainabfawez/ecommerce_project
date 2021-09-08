<?php

include "connection.php";
session_start();
$email = $_SESSION["email_client"];

if(isset($_POST["current-password"]) && $_POST["current-password"] != "" ) {
    $curr_password =$_POST["current-password"] ;
}else{
    die ("Enter your old password");
}

if(isset($_POST["new-password"]) && $_POST["new-password"] != "" ) {
    $new_password = $_POST["new-password"];
}else{
    die ("Enter your new password");
}
if(isset($_POST["confirm-password"]) && $_POST["confirm-password"] != "" && $_POST["confirm-password"]==$_POST["new-password"]  ) {
     $confirm_password = $_POST["confirm-password"];
 }else{
     die ("Passwords Mismatch");
}

$sql1="SELECT `password` FROM `clients` WHERE `email`=? "; 
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$email);
$stmt1->execute();
$password = $stmt1->get_result();

if ($password==hash('sha256',$curr_password)){
    $query= "UPDATE `clients` SET `password`=? WHERE `email`=? ";
    $stmt = $connection->prepare($query);
    $hash=hash('sha256',$new_password);
    $stmt->bind_param("ss",$hash, $email );
    $stmt->execute();
    $result = $stmt->get_result();

    header("Location: client_home.php");

}else{
    die("your current password is incorrect!");
    header("Location: edit_profile.php");
}



?>
