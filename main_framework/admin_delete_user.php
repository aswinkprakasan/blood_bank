<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    $email=$_POST["delete"];
    $sql="DELETE FROM `donor_table` WHERE `email`='$email'";  
    $sql1="DELETE FROM `last_donation_table` WHERE `email`='$email'";
    $result1=mysqli_query($conn,$sql1);
    $result=mysqli_query($conn,$sql); 
    if($result)
    {
        echo '<script type="text/JavaScript">
      if(!alert("Deleted successfully")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/main_framework/admin_dashboard.php";
      </script>';
        
    }
    else
    {
        echo '<script type="text/JavaScript">
        if(!alert("Deletion failed")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/main_framework/admin_dashboard.php";
        </script>';
    }

   }
  

?>