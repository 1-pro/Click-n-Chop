<footer class="site-footer text-white" role="contentinfo">
      
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
			  <li><a href="privacy.php">Disclaimers</a></li>
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
	<!-- Default-JavaScript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
			<script src="js/jquery.formtowizard.js"></script>

		<!-- Necessary-JavaScript-Files-&-Links -->

			
			<script>
				$( function() {
					var $signupForm = $( '#SignupForm' );
					$signupForm.validate({errorElement: 'em'});
					$signupForm.formToWizard({
						submitButton: 'SaveAccount',
						nextBtnClass: 'btn btn-primary next',
						prevBtnClass: 'btn btn-default prev',
						buttonTag:    'button',
						validateBeforeNext: function(form, step) {
							var stepIsValid = true;
							var validator = form.validate();
							$(':input', step).each( function(index) {
								var xy = validator.element(this);
								stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
							});
							return stepIsValid;
						},
						progress: function (i, count) {
							$('#progress-complete').width(''+(i/count*100)+'%');
						}
					});
				});
			</script>

	</body>
	<!-- //Body -->



</html>