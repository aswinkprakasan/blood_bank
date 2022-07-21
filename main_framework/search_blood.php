<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>search</title>
  </head>
  <body>
     <center>
       <h1>SEARCH BLOOD</h1>
       <div class="container">
        <br><br>
       <form action="search_blood.php" method="POST">
       <div class="col">
        
        <select name="bloodgroup" class="custom-select custom-select-sm">
          <option selected>Blood group</option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="AB+">AB+</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
        </div><br>
        <div class="col">
          <input type="text" name="weight" class="form-control" placeholder="Weight">
        </div><br>
        <button type="submit" name="search" class="btn btn-primary">Search</button>
       </form>
        <table class="table table-bordered">
            <thead>
              <tr>
                 <th scope="col">Name</th>
                 <th scope="col">Blood Group</th>
                 <th scope="col">Address</th>
                 <th scope="col">Phonenumber</th>
              </tr>
            </thead>
        <tbody>
             <?php
             include('../login_system/backend/config.php');
              if(isset($_POST['search']))
              {
                 $bloodgroup = $_POST['bloodgroup'];
                 $weight = $_POST['weight'];
                 if($bloodgroup!=null && $weight==null)
                 {
                 $query = "SELECT * FROM donor_table where bloodgroup='$bloodgroup' ";
                }
                 elseif($bloodgroup!=null && $weight!=null)
                 {
                  $query = "SELECT * FROM donor_table where bloodgroup='$bloodgroup'and weight>50 ";
                }
                
                 $result= mysqli_query($conn, $query);
              if(mysqli_num_rows($result) > 0)
              {
                while($row =mysqli_fetch_array($result))
                {
                 $username=$row['username'];
                 $bloodgroup=$row['bloodgroup'];
                 $address=$row['address'];
                 $phonenumber=$row['phonenumber'];
              echo"<tr>
                <td>".$username."</td>
                <td>".$bloodgroup."</td>
                <td>".$address."</td>
                <td>".$phonenumber."</td>
              </tr>";
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
        </tbody>
        </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>