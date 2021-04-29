
<?php
  require_once('loginlog.php');
 require_once('head.php');?>
  <div class="jumbotron jumbotron-fluid d-flex align-items-center mb-2 mt-5" id="loginJumbo" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(IMG/background.jpg);">
        <div class="container ">
           
      <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
             
          <h5 class="text-warning text-center">Sign in</h5>
             <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                 <input type="text" class="form-control form-control-lg" id="username" name="userNamel" placeholder="Email">
              </div>
             <div class="form-group">
               <label for="password" class="sr-only">Password</label>
               <input type="password" class="form-control form-control-lg" id="password" name="passwordl" placeholder="password">
             </div>
                        
            <div class="form-group">
                          
               <input type="submit" class="btn btn-warning btn-lg btn-block" name="login" value="Login">
             </div>

             <p  class="text-white" > <a href="#"  class="text-white">Forgot password</a>&nbsp | &nbsp
              Don't have an account?  <a href="signup.php"  class="text-white"> Sign Up</a> </p>
  
        </form>
        </div>
    </div>
       
    
    

    
     <?php require_once("footer.php");?>
</body>
</html>