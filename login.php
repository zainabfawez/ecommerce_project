
<?php
    include "connection.php";
    session_start();

    if(isset($_POST["email"]) && $_POST["email"] != "") {
        $email = $_POST["email"];
    }else{
        die ("Enter a valid input");
    }

    if(isset($_POST["password"]) && $_POST["password"] != "" ) {
        $password = hash('sha256', $_POST["password"]);	
    }else{
        die ("Enter a valid input");
    }

    $sql1="SELECT * FROM `clients`  WHERE `email`=? AND `password` = ?"; 
    $stmt1 = $connection->prepare($sql1);
    $stmt1->bind_param("ss",$email, $password);
    $stmt1->execute();
    $result = $stmt1->get_result();
    $row = $result->fetch_assoc();

    if(!empty($row)){
        $_SESSION["full_name"]= $row["first_name"]." ".$row["last_name"] ; 
        $_SESSION["email_client"]=$email;
        header ("Location: client_home.php" );
        
    }
    else{
       
        header("Location: login.html");
    }
?>

