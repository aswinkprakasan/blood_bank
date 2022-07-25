<?php

include ('config.php');

   $name=$_POST['username'];
   $pswd=$_POST['password'];
   

   $dob=$_POST['dob'];
   $sex=$_POST['sex'];
   $bloodgroup=$_POST['bloodgroup'];
   $weight=$_POST['weight'];
   $address=$_POST['address'];
   $city=$_POST['city'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
  
$sql="INSERT INTO `donor_table`(`username`, `password`, `dob`, `age`, `sex`, `bloodgroup`, `weight`, `address`, `city`, `email`, `phonenumber`) 
VALUES ('$name','$pswd','$dob','0','$sex','$bloodgroup','$weight','$address','$city','$email','$phonenumber')";
$result=mysqli_query($conn,$sql);

$sql1="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0 AS Age from donor_table where username='$name'";
$result=mysqli_query($conn,$sql1);

$data=mysqli_fetch_row($result);

$sql="UPDATE `donor_table` SET `age` = '$data[0]' WHERE `donor_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
  header("Location:../login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  

?>