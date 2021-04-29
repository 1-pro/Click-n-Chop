
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Click n' Chop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|DM+Serif+Display:400,400i&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="canonical" href="https://www.example.com/url/to/amp/document.html">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/form.css">
  <!--  <style amp-boilerplate> 
        body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
        -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
        -ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
        animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes
        -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes 
        -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes 
        -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes 
        -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes 
        -amp-start{from{visibility:hidden}to{visibility:visible}}
        </style> 
        <noscript> 
        <style amp-boilerplate> 
        body{-webkit-animation:none;
        -moz-animation:none;
        -ms-animation:none;
        animation:none}
        </style>
       
        </noscript>--->
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">Click n' Chop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            	                  <?php if(isset($_SESSION['Name'])){echo "Welcome.<span>".$_SESSION["Name"] . "</span>";}; ?>
              <li class="nav-item ">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="Order.php">Order</a>
              </li>
              <li class="nav-item  dropdown">
                  <a class="nav-link active dropdown-toggle" href="about.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                      <a class="dropdown-item" href="packages.php">Student Package</a>
                      <a class="dropdown-item" href="packages.php">Corporate Package</a>
                      <a class="dropdown-item" href="packages.php">Gift Card</a>
                    </div>
                </li>
              <li class="nav-item ">
                <a class="nav-link active" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="contact.php">Contact</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="createtable.php">Meal Table</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="deliver.php">Become a Deliver</a>
              </li>
            <?php if(isset($_SESSION['success'])){  echo "<a class=\"text-dark\" name='logout' href=\"logout.php?logout=1\">Logout</a>";}?>
            </ul>

            
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->