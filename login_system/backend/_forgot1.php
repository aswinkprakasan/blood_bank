<?php
session_start();
$mail=$_SESSION['mail'];
if(!isset($_SESSION["mail"]))
{
    header("Location:../login.php");
}
include ('config.php');
if(isset($_POST['submit']))
{
    $npass=$_POST['npass'];
    $cnpass=$_POST['cnpass'];

    if($npass===$cnpass)
        {
            $sql1="UPDATE `donor_table` SET `password` = '$npass' WHERE `donor_table`.`email` = '$mail'";
            $result1=mysqli_query($conn,$sql1);

            if($result1)
            {
              echo '<script type="text/JavaScript">
              if(!alert("Password changed successfully")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/login.php";
              </script>';

                
            }
            else
            {
              echo '<script type="text/JavaScript">
              if(!alert("Password not changed")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/forgot.php";
              </script>';
            }
        }
        else
        {
            echo '<script type="text/JavaScript">
              if(!alert("New Password not matching")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/forgot.php";
              </script>';
        }
}

?>