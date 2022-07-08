 <?php
  session_start();
  require_once("head.php");
  ?>
  <div class="slider-wrap">
            <div class="slider-item" style="background-image: url('img/background1.jpg');">
              
              <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                  <div class="col-md-8 text-center col-sm-12 ">
                    <h1 data-aos="fade-up"> Get delicious African meal at a click</h1>
                  </div>
                </div>
              </div>
      
            </div>
          <!-- END slider -->
          </div>

          <section class="section bg-light pt-0 bottom-slanted  mb-5">

  <form class="form ml-5 mt-5 mr-5 mb-5 w-70" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
            
          
    <?php 
  
    require("function.php");
    
    if(count($_POST)>0){
         
             $name=$_POST["Name"];
             $password=$_POST["password"];
             $username=$_POST["email"];
             $address=$_POST["address"];
             $phone=$_POST["phone"];
             $package=$_POST["package"];
             $plan=$_POST["plan"];
             $agreement=$_POST['agreement'];

             $db= click();
             $sql = "INSERT INTO `user` ( `Name`,`password`,`email`,`address`,`phone`,`package`,`plan`,`agreement`) 
            VALUES   ('{$name}','{$password}','{$username}','{ $address}','{$phone}','{$package}','{$plan}','$agreement')";
             $query = mysqli_query( $db,$sql);
            
             if($query){
              
              echo "<script> alert('User Details Added') ;</script>";
             $_SESSION['success'] = 'You have successfully signed  up';
             echo '<script type="text/javascript">
             window.location = "pay.php";
        </script>';
             }else{
             echo "something went wrong " . mysqli_error($db);
             }
             // run query


      }?>

    <h4 class="text-warning text-center">Sign Up</h4>
    <div class="form-group ">
    <label for="Name" class="sr-only">Name</label>    
    <input required class="form-control form-control-lg" type="text" placeholder="Full Name" id="name" name="Name">
   </div>
   <div class="form-group">
    <label for="dob" class="sr-only">Password</label>    
    <input required class="form-control form-control-lg" type="password" placeholder="Password"  id="password" name="password" md5>
   </div>
   <div class="form-group">
    <label for="email" class="sr-only">Email</label>    
    <input required class="form-control form-control-lg" type="email" placeholder="Email" id="email" name="email">
   </div>
  
    <div class="form-group">
      <label for="address" class="sr-only">Address</label>
      <input type="text" class="form-control form-control-lg" id="address" name="address"  required placeholder="Address">
    </div>
    <div class="form-group">
            <label for="phone" class="sr-only">Phone</label>
            <input type="tel" class="form-control form-control-lg" id="phone" name="phone"  required placeholder="phone">
          </div>
         
     <div class="form-group">
      <select  class="form-control form-control-lg" placeholder="User Package" name="package">
      <option value="student">Student package</option>
      <option value="banker">Corporate package</option>
      </select>
    </div> 
    <div class="form-group">
      <select  class="form-control form-control-lg" placeholder="Order Plan" name="plan" required>
      <option value="daily">Daily plan</option>
      <option value="weekly">Weekly plan</option>
      <option value="weekly">Monthly plan</option>
      <option value="weekly">Semester plan</option>
      </select>
    </div> 
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="agreed" name="agreement" required>
      <label class="form-check-label" for="validCheck">
        I have read and accepted
       <a href="terms.php">terms and conditions</a> and <a href="privacy.html">Pricvacy Policies</a>of Click n' Chop
      </label>
      <div class="valid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
   <div class="form-group">
                 
      <input type="submit" class="btn btn-warning btn-lg btn-block" value="Sign Up">
    </div>

    <h6  class="text-warning" >  All ready have an account?
       <a href="login.php"  class="text-warning">Login</a> </h6>

</form>

</section>
  <?php require_once("footer.php");?>
