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
			
			<section class="login-section section-ptb">
				<div>
					<h6 style="text-align: center;color:red"><?php echo $this->session->flashdata('Message');?></h6>
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-10 mb--30 mb-lg-0 offset-1">
							<!-- Product order success section start -->
							<section class="product-order-success-section section-ptb">
								<div class="container">
									<div class="product-order-success-container">
										<div class="product-order-success">
											
											<h2>Your order has been received.</h2>
											
											<a href="<?php echo base_url();?>Dashboard/myorder" class="order-btn">View Order Details</a>
										</div>
								<div class="order-description">
									
											<ul class="order-info">
												<li>
													<h6>Your Order Number</h6>
													<span>:<?php echo $osucess[0]->id?></span>
													<p></p>
												</li>
												<li>
													<h6>Your Order Date </h6>
													<span>:<?php echo $osucess[0]->orderdate?></span>
													<p></p>
												</li>
												<li>
													<h6>Total</h6>
													<span>:<?php echo $osucess[0]->total?></span>
													<p></p>
												</li>
											</ul>
											<a href="<?php echo base_url();?>Dashboard/myorder" class="view-summery" id="vieworder">View a summary of your order</a>
										</div>
									</div>
								</div>
								
							</section>
							<!-- Product order success section end -->
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

