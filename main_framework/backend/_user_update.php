<?php
include 'config.php';
if(isset($_POST['update']))
   {
    $email=$_POST['hide'];
    $name=$_POST["username"];
    $dob=$_POST['dob'];
    $sex=$_POST['sex'];
    $bg=$_POST['bloodgroup'];
    $weight=$_POST['weight'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phnum=$_POST['phonenumber'];
    $sql="UPDATE `donor_table` SET `username`='$name',`dob`='$dob',`sex`='$sex',`bloodgroup`='$bg',`weight`='$weight',`address`='$address',`city`='$city',`phonenumber`='$phnum' WHERE email='$email'";
    $result=mysqli_query($conn,$sql);  

    $sql1="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0 AS Age from donor_table where email='$email'";
    $result=mysqli_query($conn,$sql1);

    $data=mysqli_fetch_row($result);

    $sql="UPDATE `donor_table` SET `age` = '$data[0]' WHERE `donor_table`.`email` = '$email'";
    $result=mysqli_query($conn,$sql);
    
    if($result)
    {
        echo '<script type="text/JavaScript">
      if(!alert("Updated successfully")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/main_framework/user_dashboard.php";
      </script>';
       
    }
    else
    {
        echo '<script type="text/JavaScript">
      if(!alert("Updation failed")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/main_framework/user_update.php";
      </script>';
    }
   }

?>