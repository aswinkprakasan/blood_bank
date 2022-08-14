<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    $email=$_POST["delete"];
    $sql="DELETE FROM `donor_table` WHERE `email`='$email'";  
    $result=mysqli_query($conn,$sql); 
    if($result)
    {
        echo '<script type="text/javascript"> alert("Deleted successfully") </script>';
        
    }
    else
    {
        echo '<script type="text/javascript"> alert("User not deleted") </script>';
    }

    header("location:admin_dashboard.php");
   }
  

?>
