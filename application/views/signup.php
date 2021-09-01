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

		<section class="">
			<div>
				<h1 style="text-align: center;">Create Account</h1>
				
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="eflux-login-form-area">
							<form action="" method="POST" class="eflux-login-form">
								<div class="row">
									<div class="col-lg-6">
										<div class="input-item">
											<label>First Name</label>
											<input type="text" name="fname" placeholder="First Name" />
										</div>
									</div>

									<div class="col-lg-6">
										<div class="input-item">
											<label>Last Name</label>
											<input type="text" name="lname" placeholder="Last Name" />
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-item">
											<label>Address</label>
											<input type="text" name="add" placeholder="Address" />
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-item">
											<label>City</label>
											<input type="text" name="city" placeholder="City" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="input-item">
											<label>Zipcode</label>
											<input type="text" name="zpcode" placeholder="Zipcode" max='6' min='6' />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-item">
											<label>State</label>
											<input type="text" name="state" placeholder="State" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-item">
											<label>Country</label>
												<select class="form-control" id="sel1">
													<option>Canada</option>
												</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-item">
											<label>Email</label>
											<input type="email" name="email" placeholder="Email Address" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-item">
											<label>Password</label>
											<input type="password" name="password" placeholder="Password" />
										</div>
									</div>
								</div>

								<div>
									<button type="submit" class="btn btn-warning">Create Account</button>
									<a href="<?php echo base_url();?>" class="btn btn-warning">Back</a>
								</div>
							
								<h5><?php echo validation_errors(); ?></h5>
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
