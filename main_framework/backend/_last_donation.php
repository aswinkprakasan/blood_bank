<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<?php
session_start();
include ('config.php');

$last_don=$_POST['last_donation'];
$email=$_SESSION["mail"];
   
$sql="INSERT INTO last_donation_table (email,days,last_don_date) VALUES ('$email', '0','$last_don')";
$result=mysqli_query($conn,$sql);

$sql1="SELECT DATEDIFF(now(),`last_don_date`) AS dated FROM last_donation_table WHERE email='$email'";
$result=mysqli_query($conn,$sql1);
$data=mysqli_fetch_row($result);


$sql="UPDATE `last_donation_table` SET `days` = '$data[0]' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);

    
$sql = "UPDATE `last_donation_table` SET `last_don_date` = '$last_don' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql); 


if($result)
    {
        echo '<script type="text/javascript"> alert("Data updated") </script>';
        echo"<div class='alert alert-primary' role='alert'>
    Go to updation page <a href='../last_donation.php'>  click here</a>
  </div>";
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated") </script>';
    }
    

$conn->close();
  

  ?>