
   <?php
   require_once("head.php");
   ?>
 <div class="slider-wrap">
      <div class="slider-item" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(IMG/background3.jpeg);">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Make Your Order</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Get delicious African meal at a click</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Get Started</a></p>
            </div>
          </div>
        </div>

      </div>
    <!-- END slider -->
    </div> 
    

    <section class="section bg-light pt-0 bottom-slanted-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Gallery</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/wheat.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Wheat and Vegetable Soup</h3>
                <p>Healthy and Wealthy</p>

              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/riceelewe.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Rice Elewe</h3>
                <p>Eat rice a different way with a different spice,the way it used to be</p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/2.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Nigerian Jollof rice,Beans and plantain topped with grilled turkey</h3>
                <p>The legendary  Nigerian jollof rice best to cool your nerve and feed your appetite</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/oha.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Oha soup</h3>
                <p>Legendary Oha soup</p>
                
              </div>
              
            </div>

          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/abacha1.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Abacha</h3>
                <p>African Salad,leaving tha lasting experience</p>
               
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/moimoielewe.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Moin Moin Elewe</h3>
                <p>African delicay bringing out that flavour,if you love the real african meal this is for you</p>
           
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/beansburger.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Beans Burger</h3>
                <p>Blend of the African Western Taste</p>
                
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image"  style="background-image: url('img/macaroni.jpeg');" data-aos="fade"></div>
              <div class="text">
                <h3>Jollof Spiced Macaroni</h3>
                <p>Need to be light this is for you</p>
    
              </div>
              
            </div>

          </div>
        </div>
        

      </div>
    </section> <!-- .section -->
    
    <section class="section bg-light pt-0 bottom-slanted  mb-5">
    <div class="card shadow  w-50 justify-content-center align-items-center  py-5 px-5  mb-5"  style="margin-left:25% ;">
        
        <form action="<?= $_SERVER["PHP_SELF"];?>" class="justify-content-center" method="post">
            
          
            <?php 
                  
                 require_once("function.php");
                 
 
            if(count($_POST)>0){
              $category=$_POST["category"];
              $restaurant=$_POST["restaurant"];
              $food=$_POST["food"];
 
                     $db= click();
                     $sql = "INSERT INTO `order_table` ( `food`,`category`,`restaurant`) VALUES ('{$food}','{$category}','{$restaurant}')";
                     $query = mysqli_query( $db,$sql);
 
                     if($query){
                     echo "Order Details Added";
          
                     $_SESSION['success'] = 'You have successfully made you order';
                  
 
                     }else{
                     echo "something went wrong " . mysqli_error($db);
                     }
                     // run query
 
 
              }
          
             ?>
 
           <h5 class="text-white">Order Now</h5>
              <div class="form-group">
              <label for="restaurant" class="sr-only">Restaurant</label>    
              <input required class="form-control form-control-lg" type="text" value=""  placeholder="Restaurant(optional)" id="restaurant" name="restaurant">
             </div>
             <div class="form-group">
                <label for="category" class="sr-only">Food Category</label>    
              <select required class="form-control form-control-lg"    placeholder="Food Category"  name="category">
                <option value="local dish">African Dish</option>
                <option value="snacks">Snacks</option>
              </select>
            </div>
             <div class="form-group">
                 <label for="Food" class="sr-only">Food</label>
                  <input type="text" class="form-control form-control-lg" name="food" id="food" placeholder="Food">
               </div>
                           
                <input type="submit" class="btn btn-warning btn-lg btn-block" value="Make Order">
              </div>
 
              <p  class="text-white" > <a href="#"  class="text-white">Forgot password</a>&nbsp &nbsp | &nbsp &nbsp
              All ready have an account?
                 <a href="login.php"  class="text-white">Login</a> </p>
   
         </form>
         </div>
     </div>
   </section>
  <?php require_once("footer.php");?>
    