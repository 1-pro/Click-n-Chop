<?php require_once("head.php");?>
<section class="mb-5 py-5" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(IMG/background.jpg);">
<form class="form ml-5 mt-5 mr-5 mb-5 w-70" action="<?= $_SERVER['PHP_SELF'];?>" method="post"> 
            <?php 
          
            require("function.php");
            
            if(count($_POST)>0){
                
                $cardName=$_POST["cardName"];
                $cardNumber=$_POST["cardNumber"];
                $date=$_POST["expiryDate"];
                $cvc=$_POST["cvc"];
                $agreement=$_POST["terms"];

                $db= click();
                $sql = "INSERT INTO `acct_table` ( `cardName`,`cardNumber`,`expiryDate`,`cvc`,`terms`) 
                VALUES         ('{$cardName}','{$cardNumber}','{$date}','{$cvc}','$agreement')";
                $query = mysqli_query( $db,$sql);
     
                if($query){
                echo "<script> alert('User Details Added') ;</script>";
                $_SESSION['success'] = 'You have successfully signed  up';
                 
                }else{
                echo "something went wrong " . mysqli_error($db);
                }
                // run query
     
     
         };?>
        
            <h4 class="text-warning text-center mt-5">Account Details</h4>
            <fieldset>
            <div class="form-group mt-5">
            <label for="Name" class="sr-only">Card Name</label>    
            <input required class="form-control form-control-lg" type="text" placeholder="Card Name" id="cardName" name="cardName">
           </div>
           <div class="form-group">
            <label for="Card Number" class="sr-only">Card Number</label>    
            <input required class="form-control form-control-lg" type="text" placeholder="Card Number"  id="cardNumber" name="cardNumber">
           </div>
           <div class="form-group">
            <label for="expiry date" class="sr-only">Expiry Date</label>    
            <input required class="form-control form-control-lg" type="text" placeholder="ExpiryDate" id="expiryDate" name="expiryDate">
           </div>
          
            <div class="form-group">
              <label for="cvc" class="sr-only">CVC</label>
              <input type="text" class="form-control form-control-lg" id="cvc" name="cvc"  required placeholder="CVC" title="the three digits written behind your card">
            </div>
        
            <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="agreed"  name="terms" required>
              <label class="form-check-label" for="validCheck">
                I have read and accepted
               <a href="terms.php">terms and conditions</a> and <a href="privacy.html">Pricvacy Policies</a>of Click n' Chop
              </label>
              <div class="valid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          </fieldset>
           <div class="form-group">
                         
              <input type="Submit" class="btn btn-warning btn-lg btn-block" value="Make Payment">
            </div>
        
        
        </form>
        
        </section>
        <footer class="site-footer" role="contentinfo">
      
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4 mb-5">
               <h3>About Us</h3>
              <p class="mb-5">We've got you covered, due to the high increase of illment caused by bad feeding habit not eating when you are meant to,we are here to ensure you never miss a meal</p>
              <ul class="list-unstyled footer-link d-flex footer-social">
                <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
              </ul>
  
            </div>
            <div class="col-md-5 mb-5">
              <div class="mb-5">
                <h3>Opening Hours</h3>
                <p><strong class="d-block font-weight-normal text-black">Sunday-Thursday</strong> 6:30AM - 10PM</p>
              </div>
              <div>
                <h3>Contact Info</h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block">
                    <span class="d-block text-black">Address:</span>
                    <span>Kaduna,Nigeria</span></li>
                  <li class="d-block"><span class="d-block text-black">Phone:</span><span>+2348148291673</span></li>
                  <li class="d-block"><span class="d-block text-black">Email:</span><span>andrewokiki01@gmail.com</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 mb-5">
              <h3>Quick Links</h3>
              <ul class="list-unstyled footer-link">
                <li><a href="about.php">About</a></li>
                <li><a href="terms.php">Terms of Use</a></li>
                <li><a href="privacy.html">Disclaimers</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-3">
            
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-md-center text-left">
              <p>
              
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with Love <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="andrewokiki01@gmail.com " target="_blank">Okiki</a>

  
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->
  
      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>
  
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/aos.js"></script>
  
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/magnific-popup-options.js"></script>
      
  
      <script src="js/main.js"></script>
      
    </body>
  </html>
        