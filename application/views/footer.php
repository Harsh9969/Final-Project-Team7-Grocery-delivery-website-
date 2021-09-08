<html>
<body>
	<!-- footer section -->
	<footer class="footer" id="about">
				<div class="container">
					<div class="footer-top">
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<div class="footer-widget">
									<a href="" class="footer-logo"><img src="<?php echo base_url();?>assets/images/GM.png" style=" height: 80px; width:130px;"alt="logo"></a>
									
									<ul class="social-media-list d-flex flex-wrap">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-6 col-lg-3">
								<div class="footer-widget">
									<h5 class="footer-title">Product</h5>
									<div class="widget-wrapper">
										<ul>
											<li><a href="#">Fruits & Vegetables</a></li>
											<li><a href="#">Dairy Products</a></li>
											<li><a href="#">Bakery Items</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-3">
								<div class="footer-widget">
									<h5 class="footer-title">Contact</h5>
									<div class="widget-wrapper">
										<ul>
											<li><a href="#">Find Us</a></li>
											<li><a href="#">FAQ</a></li>
											<li><a href="#">Help</a></li>
											
										</ul>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-3">
								<div class="footer-widget">
								<h5 class="footer-title">Feedback</h5>
									<div class="widget-wrapper">
									<div>
										<form method="POST" action="<?php echo base_url();?>Home/feedback">
										<input type="email" name="em" placeholder="Email"  id="emfed" class="form-control">
										<input type="text" name="msg" id="msg1" placeholder="Message" class="form-control">
										<input type="submit" class="btn btn-warning">
										</form>
										</div>
										<div class="payment-method d-flex flex-wrap">
											<a href="#"><img src="<?php echo base_url();?>assets/images/payment/visa.png" alt="payment"></a>
											<a href="#"><img src="<?php echo base_url();?>assets/images/payment/paypal.png" alt="payment"></a>
											<a href="#"><img src="<?php echo base_url();?>assets/images/payment/master.png" alt="payment"></a>
											<!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="footer-bottom">
						<div class="row">
							<div class="col-md-12 text-center text-md-left mb-3 mb-md-0">
								<p class="copyright" style="margin-left:40%;">Copyright &copy; 2021 All Rights Reserved.</p>
							</div>

							
						</div>
					</div>
				</div>
			</footer>
			<!-- footer section -->
		</div>
	</div>




	<a href="#top-page" class="to-top js-scroll-trigger"><span><i class="fas fa-arrow-up"></i></span></a>
	<script src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url();?>assets/js/bootstrap.bundle.min.js'></script>
	<script src='<?php echo base_url();?>assets/js/swiper.min.js'></script>
	<script src="<?php echo base_url();?>assets/js/slick.js"></script>
	<script src='<?php echo base_url();?>assets/js/jquery-easeing.min.js'></script>
	<script src='<?php echo base_url();?>assets/js/scroll-nav.js'></script>
	<script src="<?php echo base_url();?>assets/js/jquery.elevatezoom.js"></script>
	<script src='<?php echo base_url();?>assets/js/price-range.js'></script>
	<script src='<?php echo base_url();?>assets/js/custom-select.js'></script>
	<script src='<?php echo base_url();?>assets/js/multi-countdown.js'></script>
	<script src='<?php echo base_url();?>assets/js/fly-cart.js'></script>
	<script src='<?php echo base_url();?>assets/js/theia-sticky-sidebar.js'></script>
	<script src='<?php echo base_url();?>assets/js/functions.js'></script>
	

</body>
</html>
