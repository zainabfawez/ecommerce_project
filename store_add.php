<?php

    include "connection.php";
    $id= $_GET["item_id"];
  

    $sql1="UPDATE items SET quantity= quantity+1  where id=? "; 
    $stmt1 = $connection->prepare($sql1);
    $stmt1->bind_param("s",$id);
    $stmt1->execute();
    $quantity = $stmt1->get_result();

    $sql1="SELECT * from items  where id=?"; 
    $stmt1 = $connection->prepare($sql1);
    $stmt1->bind_param("s",$id);
    $stmt1->execute();
    $result = $stmt1->get_result();

    while($row=$result->fetch_assoc()){
        echo $row["quantity"];
    }



    
?>