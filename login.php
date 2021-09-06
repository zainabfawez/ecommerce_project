<h2>Here is the information submitted by you:</h2>
<p>Password: <b><?php echo $_POST["password"] ?? ''; ?></b></p>
<p>Email: <b><?php echo $_POST["email"] ?? ''; ?></b></p>


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

$sql1="Select * from clients where email=? and password = ?"; #Check if the email already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("ss",$email, $password);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(!empty($row)){
    $_SESSION["full_name"]= $row["first_name"]." ".$row["last_name"] ; 
    
}
else{
    die ("not added");
}

