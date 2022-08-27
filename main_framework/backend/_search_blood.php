<?php
 

echo'<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"style="width:20px;color:#7a0101;">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
  Make sure to not leave the bloodgroup selection empty
  </div>
</div>';
include('config.php');

if(isset($_POST['search']))
{
                
  $bloodgroup = $_POST['bloodgroup'];
  $city = $_POST['city'];
                 
  $checkbg=$bloodgroup;
               
  if($bloodgroup!=null)
  {
    if($city!=null)
    {
        $query = "SELECT * FROM donor_table where bloodgroup='$bloodgroup' and city='$city' ";
    }
    else
    {
        $query = "SELECT * FROM donor_table where bloodgroup='$bloodgroup' "; 
    }
  }             
  $result= mysqli_query($conn, $query);
  
  

  if(mysqli_num_rows($result) > 0)
  {
    
      while($row =mysqli_fetch_array($result))
      {
        $email=$row['email'];
        $username=$row['username'];
        $bloodgroup=$row['bloodgroup'];
        $address=$row['address'];
        $phonenumber=$row['phonenumber'];
        
        if($row['age']>18 && $row['weight']>45 && $row['age']<85)
        {
          
        $sql= "SELECT * FROM last_donation_table where email='$email'";
        $result1=mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result1);
        if(mysqli_num_rows($result1) > 0)
        {
        ?>
<tr>
    <td><?php echo $username?></td>
    <td><?php echo $bloodgroup?></td>
    <td><?php echo $address?></td>
    <td><?php echo $phonenumber?></td>
    <td><?php 
              
              if($data['days']>90)
              { ?>
        <div class="container">

            <h5><span style="color:white;" class="badge bg-success">Available</span></h5>

        </div>
        <?php
              }
              else{
                ?>
        <div class="container">

            <h5><span style="color:white;" class="badge bg-danger">Not available</span></h5>

        </div>
        <?php
              }
              ?>
    </td>
</tr>
<?php
        }
        
        // else{
        //   echo"<tr>
        //     <td colspan='6'>No Record Found1</td>
        // </tr>";
        // }
      }
      }
  }

  else
  {
    echo"<tr>
            <td colspan='6'>No Record Found</td>
        </tr>";
  }
}
      
?>