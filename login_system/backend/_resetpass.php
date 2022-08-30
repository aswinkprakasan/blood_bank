<?php
session_start();
include ('config.php');
$mail=$_SESSION['mail'];
$email=$_SESSION['mail'];
if(isset($_POST['change']))
{
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $cnewpass=$_POST['cnewpass'];

    $sql="SELECT * FROM donor_table WHERE email='$email' AND password='$oldpass'";
    $result=mysqli_query($conn,$sql);
    $check=mysqli_num_rows($result);

    if($check===1)
    {
        if($newpass===$cnewpass)
        {
            $sql1="UPDATE `donor_table` SET `password` = '$newpass' WHERE `donor_table`.`email` = '$email'";
            $result1=mysqli_query($conn,$sql1);

            if($result1)
            {
              echo '<script type="text/JavaScript">
              if(!alert("Password changed successfully")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/main_framework/user_dashboard.php";
              </script>';
                
            }
            else
            {
              echo '<script type="text/JavaScript">
              if(!alert("Password not changed")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/resetpass.php";
              </script>';
            }
        }
        else
        {
            echo '<script type="text/JavaScript">
              if(!alert("New Password not matching")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/resetpass.php";
              </script>';
        }
    }
    else
        {
            echo '<script type="text/JavaScript">
              if(!alert("Old Password not matching")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/resetpass.php";
              </script>';
        }
}

?>