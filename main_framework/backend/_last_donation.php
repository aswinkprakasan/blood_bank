<?php
session_start();
include ('config.php');

$last_don=$_POST['last_donation'];
$email=$_SESSION["mail"];
   
// $sql="INSERT INTO last_donation_table (email,days,last_don_date) VALUES ('$email', '0','$last_don')";
// $result=mysqli_query($conn,$sql);

$sql1="SELECT DATEDIFF(now(),`last_don_date`) AS dated FROM last_donation_table WHERE email=$email";
$result=mysqli_query($conn,$sql1);
echo $result;
$data=mysqli_fetch_row($result);

$sql="UPDATE `last_donation_table` SET `days` = '$data[0]' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);

    
// $sql = "UPDATE `last_donation_table` SET `last_don_date` = '$last_don' WHERE `last_donation_table`.`email` = '$email'";
// $result=mysqli_query($conn,$sql); 

header("Location:../last_donation.php");


$conn->close();
  

  ?>