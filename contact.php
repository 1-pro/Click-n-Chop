
     <?php require_once("head.php");?>
    <div class="slider-wrap">
      <div class="slider-item" style="background-image: url('img/call4.jpeg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Contact Us</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Get delicious African meal at a click</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Get Started</a></p>
            </div>
          </div>
        </div>

      </div>
    <!-- END slider -->
    </div> 
    

    <section class="section  pt-5 top-slant-white2 relative-higher bottom-slant-gray">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="/action-page.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>Kaduna,Nigeria</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+234 814 829 1673</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>andrewokiki01@gmail.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kaduna,Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>
          <a href="https://www.bitgeeks.net/embed-google-map/">bitgeeks.net</a>
        </div>
        <style>
        .mapouter{
          position:relative;
          margin-left: 30%;
          height:500px;
          width:600px;
          }
        .gmap_canvas{
          overflow:hidden;
          background:none!important;
          height:500px;
          width:600px;
          }
        </style>
        </div>
    </section>

    <section class="section relative-higher">

        <div class="clearfix mb-5 pb-5">
          <div class="container-fluid">
            <div class="row" data-aos="fade">
              <div class="col-md-12 text-center heading-wrap">
                <h2>Testimonial</h2>
                <!-- <span class="back-text">Testimonial</span> -->
              </div>
            </div>
          </div>
        </div>
  
        <div class="container">
  
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="owl-carousel centernonloop2">
                <div class="slide" data-aos="fade-left" data-aos-delay="100">
                  <blockquote class="testimonial">
                    <p>&ldquo; This is really an awesome platform it has saved me from constant unnecessary hunger strike,cause i can now have my meal at my office &rdquo;</p>
                    <div class="d-flex author">
                      <img src="img/MTEST2.jpg" alt="Abdul" class="mr-4">
                      <div class="author-info">
                        <h4>Abdul Yusuf</h4>
                        <p>MD, Bank of Agriculture</p>
                      </div>
                    </div>  
                  </blockquote>
                </div>
                <div class="slide" data-aos="fade-left" data-aos-delay="200">
                  <blockquote class="testimonial">
                    <p>&ldquo;During Exams as a student i find i very difficult to go out to eat or even prepare a nice meal for my self,now with the help of Click n' Chop i can have all the nourishment i need &rdquo;</p>
                    <div class="d-flex author">
                      <img src="img/FTEST1.jpg" alt="Susan" class="mr-4">
                      <div class="author-info">
                      <h4>Susan Yahaya</h4>
                        <p>Student UniAbuja</p>
                      </div>
                    </div>  
                  </blockquote>
                </div>
                <div class="slide" data-aos="fade-left" data-aos-delay="300">
                  <blockquote class="testimonial">
                    <p>&ldquo; I have been trying to keep to my diet for so long but its been very difficult now with the help of Click n' Chop Meal Time table all i have to do is relax and my meal is delivered to be based on my diet plan  &rdquo;</p>
                    <div class="d-flex author">
                      <img src="img/FTEST5.jpg" alt="Eunice" class="mr-4">
                      <div class="author-info">
                        <h4>Eunice Ndidm</h4>
                        <p>Fashion Designer</p>
                      </div>
                    </div>  
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
  
          
  
          
        </div>
      </section> <!-- .section -->
    <?php require_once("footer.php");?>