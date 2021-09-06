
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
    $password = hash('sha256',$_POST["password"]) ;	
}else{
    die ("Enter a valid input");
}



$sql1="Select * from stores where email=? and password = ?"; 
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("ss",$email, $password);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(!empty($row)){
    $_SESSION["name_store"]= $row["name"];
}
else{
    die ("not added");
}

