<?php
    include "connection.php";
    session_start();

    $store_id=$_SESSION["store_id"];
    

    if(isset($_POST["name"]) && $_POST["name"] != "" ) {
        $name = $_POST["name"];
    }else{
        die ("Enter a name for you item");
    }

    if(isset($_POST["description"]) && $_POST["description"] != "" ) {
        $description = $_POST["description"];
    }else{
        die ("you have to decribe your product");
    }

    if(isset($_POST["price"]) && $_POST["price"] != "" ) {
        $price = $_POST["price"];
    }else{
        die ("What is your item's price");
    }

    if(isset($_POST["quantity"]) && $_POST["quantity"] != "" ) {
        $quantity = $_POST["quantity"];
    }else{
        die ("how many items do you have?");
    }


    // $name="hi";
    // $description="hi";
    // $quantity=3;
    // $price=0;



    $query= "INSERT INTO `items` (`name`,`description`,`quantity`, `price`, `store_id`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sssss",$name,$description,$quantity,$price,$store_id);
    $stmt->execute();
    $result = $stmt->get_result(); 


    
   

    

    header('location: store_home_html.php');

?>