<html>
    <head>
        <title>Search</title>
    </head>
    <body>
    <div class="header-area">
      
      <ul class="links">
        
        <li><a href="index.html">Home</a></li>
      </ul>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <form method="post">
          <br><br><br>
          <div class="container">
          <div class="form-row align-items-center">
           
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name=blood>
                  <option selected>Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
            <div class="col-auto my-1">
              <button type="submit" class="btn btn-primary" name="search">SEARCH</button>
            </div>
          </div>
          </div>
        </form>
        </div>
        <table>
          <tr><th>Name</th><th>Address</th><th>Sex</th><th>Blood Group</th><th>Phone Number</th></tr>
            <?php
        if(isset($_POST['search']))
        {
          include('config.php');
          $blood=$_POST['blood'];
          $sql="SELECT username,address,sex,bloodgroup,phonenumber from donor_table where bloodgroup=$blood;";
          $result=mysqli_query($conn,$sql);
          if($result)
          {
            while($row=mysqli_fetch_assoc($result))
            {
              $username=$row['username'];
              $address=$row['address'];
              $sex=$row['sex'];
              $bloodgroup=$row['bloodgroup'];
              $phone=$row['phonenumber'];
              echo "<tr><td>".$username."</td><td>".$address."</td><td>".$sex."</td><td>".$bloodgroup."</td><td>".$phone."</td></tr>";
            }
          }
        }
        ?>
        </table>
    </body>

</html>
