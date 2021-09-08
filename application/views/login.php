<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Mania</title>
	<link rel="shortcut icon" type="image/png" href="assets/images/GM.png" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/custom-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="top-page">

	<div class="page-layout">
	<div>
		<a href="<?php echo base_url();?>"><span><i class="fas fa-home fa-3x"></i></span></a>
	</div>
		<div class="main-content-area">
			<!-- page-header-section start -->

			<!-- page-header-section end -->



			<section class="login-section section-ptb">
				<div>
					<h1 style="text-align: center;">Login</h1>
					<h6 style="text-align: center;color:red"><?php echo $this->session->flashdata('Message');?></h6>
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 mb--30 mb-lg-0 offset-3">
							<div class="eflux-login-form-area">

								<form action="" method="POST" class="eflux-login-form">

									<div class="input-item">
										<label>Email</label>
										<input type="email" name="email" placeholder="Email Address" />
									</div>

									<div class="input-item">
										<label>Password</label>
										<input type="password" name="password" placeholder="Password" />
									</div>

									<div>
										<a style="text-align:right;color:blue" href="<?php echo base_url();?>Forgotpassword">Forgot Password</a>
									</div>
									<div>
										<button type="submit" class="btn btn-warning">Sign In</button>
									</div>
									<a href="<?php echo base_url();?>Registration" style="text-align:right;color:blue">Don't have an Account?Sign Up</a>
									
									<h5 style="text-align: center;color:red"><?php echo validation_errors(); ?></h5>
								</form>
							</div>
						</div>

					</div>
				</div>
			</section>
		</div>
	</div>


	<a href="#top-page" class="to-top js-scroll-trigger"><span><i class="fas fa-arrow-up"></i></span></a>
	<script src='assets/js/jquery.min.js'></script>
	<script src='assets/js/bootstrap.bundle.min.js'></script>
	<script src='assets/js/swiper.min.js'></script>
	<script src="assets/js/slick.js"></script>
	<script src='assets/js/jquery-easeing.min.js'></script>
	<script src='assets/js/scroll-nav.js'></script>
	<script src="assets/js/jquery.elevatezoom.js"></script>
	<script src='assets/js/price-range.js'></script>
	<script src='assets/js/custom-select.js'></script>
	<script src='assets/js/theia-sticky-sidebar.js'></script>
	<script src='assets/js/functions.js'></script>


</body>



</html>
