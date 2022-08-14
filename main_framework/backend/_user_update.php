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

    $sql1="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0 AS Age from donor_table where username='$name'";
    $result=mysqli_query($conn,$sql1);

    $data=mysqli_fetch_row($result);

    $sql="UPDATE `donor_table` SET `age` = '$data[0]' WHERE `donor_table`.`email` = '$email'";
    $result=mysqli_query($conn,$sql);
    
    if($result)
    {
        echo '<script type="text/javascript"> alert("Updated successfully") </script>';
        header("location:../user_dashboard.php");
       
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated") </script>';
    }
   }

?>