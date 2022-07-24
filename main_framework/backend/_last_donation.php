<?php
session_start();
include ('config.php');

$last_don=$_POST['last_donation'];
$email=$_SESSION["mail"];
   
$sql="INSERT INTO last_donation_table(email,month,last_don_date) VALUES ('$email', '0','$last_don')";
$result=mysqli_query($conn,$sql);
    
$sql = "UPDATE `last_donation_table` SET `last_don_date` = '$last_don' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql); 

header("Location:../last_donation.php");


$conn->close();
  

  ?>