<?php

include "connection.php";
session_start();
$email = $_SESSION["email_client"];

if(isset($_POST["current-email"]) && $_POST["current-email"] != "" ) {
    $curr_email =$_POST["current-email"] ;
}else{
    die ("Enter your current email");
}

if(isset($_POST["new-email"]) && $_POST["new-email"] != "" ) {
    $new_email = $_POST["new-email"];
}else{
    die ("Enter your new email");
}


$sql1="SELECT * FROM `clients` WHERE `email`=? "; 
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$curr_email);
$stmt1->execute();
$result1 = $stmt1->get_result();

while($row=$result1->fetch_assoc()){
    $id=$row["id"];
    $email=$row["email"];
}

if ($email== $curr_email){
    $query= " UPDATE `clients` SET `email`=? WHERE `id`=? ";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss",$new_email, $id );
    $stmt->execute();
    $result = $stmt->get_result();

    header("Location: client_home.php");

}else{
    die("your current password is incorrect!");
    header("Location: edit_profile.php");
}



?>