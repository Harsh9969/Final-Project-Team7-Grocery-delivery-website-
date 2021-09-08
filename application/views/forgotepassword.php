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
			<section id="emailblock" >
				<div>
					<h1 style="text-align: center;">Forgot Password</h1>
					<h6 style="text-align: center;color:red"><?php echo $this->session->flashdata('Message');?></h6>
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 mb--30 mb-lg-0 offset-3">
							<div class="eflux-login-form-area">

								<form   class="eflux-login-form">

									<div class="input-item">
										<label>Email</label>
										<input type="email" id="email1" name="email" placeholder="Email Address" />
									</div>

									<div id="error"></div>

									<div>
										<button onclick="checkemail();" type="button" class="btn btn-warning">Check Email</button>
									</div>
									
									<h5 style="text-align: center;color:red"><?php echo validation_errors(); ?></h5>
								</form>
							</div>
						</div>

					</div>
				</div>
			</section>
			<section id="passwordblock" class="login-section section-ptb" style="display: none">
				<div>
					<h1 style="text-align: center;">Forgot Password</h1>
					<h6 style="text-align: center;color:red"><?php echo $this->session->flashdata('Message');?></h6>
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 mb--30 mb-lg-0 offset-3">
							<div class="eflux-login-form-area">

								<form action="<?php echo base_url()?>Forgotpassword/updatepassword" method="POST" class="eflux-login-form">

									<div class="input-item">
										<label>Email</label>
										<input id="email2" type="email" name="email" placeholder="Email Address" readonly />
									</div>

									<div class="input-item" >
										<label>Password</label>
										<input type="password" name="password" placeholder="Password"  />
									</div>

									<div>
										<button type="submit" class="btn btn-warning">Save</button>
									</div>
									<h5 style="text-align: center;color:red"><?php echo validation_errors(); ?></h5>
								</form>
							</div>
						</div>

					</div>
				</div>
			</section>
		</div>
	</div>

<script>
	function checkemail()
    {
		var url="<?php echo base_url();?>";
		var z = document.getElementById("email1");
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		 {
			if (this.readyState == 4 && this.status == 200)
			{
				if(this.responseText=="Hello")
				{
					var x = document.getElementById("emailblock");
					var y = document.getElementById("passwordblock");
					var e2 = document.getElementById("email2");
					x.style.display = "none";
					y.style.display = "block";
					e2.value=z.value;
				}
				else
				{
					var error1 = document.getElementById("error");
					error1.innerHTML="<p style='color:red;'>Email Id Not Register</p>";
				}
			}
		}
		xhttp.open("GET", url+"Forgotpassword/checkemail?email=" + z.value, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("password=" + x.value + "&email=" + z.value);
	}
</script>
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

<!-- Mirrored from efluxgrocery.fluxtheme.com/eflux-ltr/singin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 07:49:47 GMT -->

</html>
