<?php

include "connection.php";
session_start();

if(isset($_POST["email"]) && $_POST["email"] != "" ) {
    $email = $_POST["email"];
}else{
    die ("Enter a valid email");
}

if(isset($_POST["password"]) && $_POST["password"] != "" ) {
    $password = $_POST["password"];
}else{
    die ("Enter a password");
}
if(isset($_POST["confirmPassword"]) && $_POST["confirmPassword"] != "" && $_POST["confirmPassword"]==$_POST["password"]  ) {
     $confirmPassword = $_POST["confirmPassword"];
 }else{
     die ("Passwords Mismatch");
}

if(isset($_POST["terms"])  ) {
    $terms = $_POST["terms"];
}else{
    die ("you didn't agree to our terms and conditions.");
}

if (isset($_POST["type"])){
    $type = $_POST["type"];
}else{
    ("please choose a  type of registration");
}
//checking if the email is already in the database:
   
if ($type=="client"){
    $sql1="Select email from clients where email=? "; 
    $stmt1 = $connection->prepare($sql1);
    $stmt1->bind_param("s",$email);
    $stmt1->execute();
    $result = $stmt1->get_result();
    $row = $result->fetch_assoc();

    if(empty($row)) {
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$password;
        header("Location:info_client.html");
    }else{
        header("location: register.html");
    }
    
}else{
    $sql2="Select email from stores where email=? "; 
    $stmt2 = $connection->prepare($sql2);
    $stmt2->bind_param("s",$email);
    $stmt2->execute();
    $result = $stmt2->get_result();
    $row2 = $result->fetch_assoc();
    if(empty($row2)){
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$password;
        header("Location: info_stores.html");
        
       
    }else{
        header("location: register.html");

    }
   
}           
    
    
    
    
?>

   