<?php 
session_start();
require_once("head.php");?>

 <div class="slider-wrap">


      <div class="slider-item" style="background-image: url('img/background1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Never miss a meal with our help</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Get Started</a></p>
            </div>
          </div>
        </div>

      </div>
    <!-- END slider -->
    </div> 

<section class=" ml-5 mr-5 mb-5 px-5 py-5 jumbotron-fluid mt-5" >

<form action="<?=$_SERVER['PHP_SELF']?>" method="post" noautocomplete>
<?php 
  
  require("function.php");
  
  if(count($_POST)>0){
       
           $monday=$_POST["monday"];
           $tuesday=$_POST["tuesday"];
           $wednesday=$_POST["wednesday"];
           $thursday=$_POST["thursday"];
           $friday=$_POST["friday"];
           $saturday=$_POST["saturday"];
           $sunday=$_POST["sunday"];
  

           $db= click();
           $sql = "INSERT INTO `timetable` ( `monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`saturday`,`sunday`) 
          VALUES   ('{$monday}','{$tuesday}','{$wednesday}','{$thursday}','{$friday}','{$saturday}','{$sunday}')";
           $query = mysqli_query( $db,$sql);
          
           if($query){
            
            echo "<script> alert('Table Details Added') ;</script>";
           $_SESSION['success'] = 'You have successfully signed  up';
           echo '<script type="text/javascript">
           window.location = "table.php";
      </script>';
           }else{
           echo "something went wrong " . mysqli_error($db);
           }
           // run query


    }

?>

<h4 class="text-warning text-center py-5">Create Meal Time Table</h4>
    <div class="form-group ">
    <label for="monday" class="sr-only">Monday</label>    
    <input required autofocus class="form-control form-control-lg" type="text" placeholder="Monday Meal" id="monday" name="monday">
   </div>
   <div class="form-group">
    <label for="tuesday" class="sr-only">Tuesday</label>    
    <input required class="form-control form-control-lg" type="text" placeholder="Tuesday Meal"  id="tuesday" name="tuesday" md5>
   </div>
   <div class="form-group">
    <label for="wednesday" class="sr-only">Wednesday</label>    
    <input required class="form-control form-control-lg" type="text" placeholder="Wednesday Meal" id="wednesday" name="wednesday">
   </div>
  
    <div class="form-group">
      <label for="thursday" class="sr-only">Thursday</label>
      <input type="text" class="form-control form-control-lg" id="thursday" name="thursday"  required placeholder="Thursday Meal">
    </div>
    <div class="form-group">
            <label for="friday" class="sr-only">Friday</label>
            <input type="text" class="form-control form-control-lg" id="friday" name="friday"  required placeholder="Friday Meal">
          </div>
          <div class="form-group">
            <label for="saturday" class="sr-only">Saturday</label>
            <input type="text" class="form-control form-control-lg" id="saturday" name="saturday"  required placeholder="Saturday Meal">
          </div>
          <div class="form-group">
            <label for="sunday" class="sr-only">Sunday</label>
            <input type="text" class="form-control form-control-lg" id="sunday" name="sunday"  required placeholder="Sunday Meal">
          </div>
   <div class="form-group">
                 
      <input type="submit" class="btn btn-outline-primary btn-block" value="Create">
    </div>
   
    </form>

</section>
<a href="table.php" target="_blank" class="btn btn-large btn-primary mb-5 ml-5">View Table</a>




