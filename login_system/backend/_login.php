<?php
session_start();
include ('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email=$_POST["email"];
    $pass=$_POST["password"];


    $sql="SELECT * FROM donor_table WHERE email='$email' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($row["userrole"]=="user")
    {
        $_SESSION["mail"]=$email;
        header("Location:../../main_framework/user_dashboard.php");
    }

    elseif($row["userrole"]=="admin")
    {
        $_SESSION["mail"]=$email;
        header("Location:../../main_framework/admin_dashboard.php");
    }
    else
    {
        echo '<script type="text/javascript"> alert("Incorrect Creditionals!!") </script>';
    }
    
}




?>