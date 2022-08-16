<?php
session_start();
include ('config.php');

if(isset($_POST['submit']))
{
    $email=$_POST["email"];
    $pass=$_POST["password"];


    $sql="SELECT * FROM donor_table WHERE email='$email' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    $check=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    
    if($check==1)
    {
        
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
    }
    else
    {
        echo '<script type="text/javascript"> alert("Email and Password not matching!!") </script>';
    }
    
}

?>