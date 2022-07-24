<?php

//connecting to database via config.php inpartials folder//

include ('config.php');
//fetching details//

$email=$_POST["email"];
$dob=$_POST["dob"];

//Setting alert as error by default//

$alert=false;

//validating entries by user and updating the databse//

if($email!=null && $dob!=null)
{
    $sql="SELECT password FROM donor_table WHERE email='$email' AND dob='$dob'";
    $result=mysqli_query($conn,$sql);
    $pass=mysqli_fetch_row($result);
}

?>

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
if($result)
{
    echo"<div class='alert alert-primary' role='alert'>
    Your password is '$pass[0]'....Please proceed to <a href='../login.php'>login</a>
  </div>";
}
?>
</body>
</html>