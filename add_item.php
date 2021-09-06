<?php
    include "connection.php";
    session_start();

    $store_name=$_SESSION["name_store"];

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

    // $query1= "select id from store where name=?";
    // $stmt1 = $connection->prepare($query1);
    // $stmt1->bind_param("s",$store_name);
    // $stmt1->execute();
    // $result1 = $stmt->get_result();
    // $store_id = $result1->fetch_assoc();

    $store_id= "2";

    $query= "INSERT INTO `items` (`name`,`description`,`quantity`, `price`, `store_id`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sssss",$name,$description,$quantity,$price,$store_id);
    $stmt->execute();
    $result = $stmt->get_result();

    

    header('location: store_home_html.php');

?>