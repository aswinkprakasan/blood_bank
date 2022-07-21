<?php

include ('config.php');
//if(isset($_POST['submit']))
  // {
   $name=$_POST['firstname'].' '.$_POST['lastname'];
   echo$name;
   $pswd=$_POST['password'];
   

   $dob=$_POST['dob'];
   $sex=$_POST['sex'];
   $bloodgroup=$_POST['bloodgroup'];
   $weight=$_POST['weight'];
   $address=$_POST['address'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
  
$sql = "INSERT INTO donor_table (username,password,dob,sex,bloodgroup,weight,address,email,phonenumber,age)
VALUES ('$name','$pswd','$dob','$sex','$bloodgroup','$weight','$address','$email','$phonenumber',0)";
$result=mysqli_query($conn,$sql); 
$sql1="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0 AS Age from donor_table where username='$name'";
$result=mysqli_query($conn,$sql1);
$data=mysqli_fetch_row($result);
$sql="UPDATE `donor_table` SET `age` = '$data[0]' WHERE `donor_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);
//if ($conn->query($sql) === TRUE) {
  //header("Location:../login.php");
//} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
  
//}
  
  ?>