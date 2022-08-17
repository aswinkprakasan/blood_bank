<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>




<?php

include ('config.php');

if(isset($_POST['submit'])) {

   $name=mysqli_real_escape_string($conn, $_POST['username']);
   $pswd=mysqli_real_escape_string($conn, $_POST['password']);
   $cpswd=mysqli_real_escape_string($conn, $_POST['cpassword']);
   $dob=mysqli_real_escape_string($conn, $_POST['dob']);
   $sex=mysqli_real_escape_string($conn, $_POST['sex']);
   $bloodgroup=mysqli_real_escape_string($conn, $_POST['bloodgroup']);
   $weight=mysqli_real_escape_string($conn, $_POST['weight']);
   $address=mysqli_real_escape_string($conn, $_POST['address']);
   $city=mysqli_real_escape_string($conn, $_POST['city']);
   $email=mysqli_real_escape_string($conn, $_POST['email']);
   $phonenumber=mysqli_real_escape_string($conn, $_POST['phonenumber']);


   $emailcheck="SELECT * FROM donor_table WHERE email = '$email'";
   $query=mysqli_query($conn,$emailcheck);
   $emailcount=mysqli_num_rows($query);
   if ($emailcount>0) 
   {
    echo '<script type="text/JavaScript">
      if(!alert("Email already exists")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/register.php";
      </script>';
   }

   else
   {
    if($pswd===$cpswd)
    {
      $sql="INSERT INTO `donor_table`(`username`, `password`, `dob`, `age`, `sex`, `bloodgroup`, `weight`, `address`, `city`, `email`, `phonenumber`) 
      VALUES ('$name','$pswd','$dob','0','$sex','$bloodgroup','$weight','$address','$city','$email','$phonenumber')";
      $result=mysqli_query($conn,$sql);

      $sql1="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0 AS Age from donor_table where username='$name'";
      $result=mysqli_query($conn,$sql1);
      $data=mysqli_fetch_row($result);

      $sql="UPDATE `donor_table` SET `age` = '$data[0]' WHERE `donor_table`.`email` = '$email'";
      $result=mysqli_query($conn,$sql);

      if($result)
    {
      echo '<script type="text/JavaScript">
      if(!alert("Registered successfully")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/login.php";
      </script>';
        
    }
    else
    {
      echo '<script type="text/JavaScript">
      if(!alert("Not Registered")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/register.php";
      </script>';
    }


    }
    else
    {
      echo '<script type="text/JavaScript">
      if(!alert("Password not matching")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/register.php";
      </script>';
    }
   }
  
}
$conn->close();

?>