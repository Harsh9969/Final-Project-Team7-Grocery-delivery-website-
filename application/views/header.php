<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Mania</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/GM.png" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>
<style>
	.custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}

.custom-toggler.navbar-toggler {
  border-color: rgb(255,102,203);
} 
</style>
<body id="top-page">
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/GM.png" style="height: 59px;" alt="logo"></a>
		<button class="navbar-toggler custom-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
				<li class="ml-sm-5">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</li>

			
			</ul>
		
			<div class="form-inline my-2 my-lg-0">
				<ul class="navbar-nav mr-auto">
				<li class="wish-list mr-3"><a href=""><i class="fas fa-heart"></i> </a></li>
				<li class="cart-option mr-3"  ><a onclick="" href="<?php echo base_url();?>Cart"><span class="cart-icon"><i class="fas fa-shopping-cart"></i></a></li>	
						
				<?php if($this->session->User)
					{
					?>
						<li class="signin-option  mr-3"><a href="<?php echo base_url(); ?>Dashboard/address"><i class="fas fa-user"></i>My Account</a></li>
						<li class="signin-option  mr-3"><a href="<?php echo  base_url().'Logout'?>"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
					<?php
					}
					else
					{
					?>
							<li class="signin-option  mr-3"><a href="<?php echo base_url(); ?>Login"><i class="fas fa-user mr-2"></i>Sign In</a></li>
					<?php
					}
					?>
				</ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg">
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Products
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url()?>Category?category=FruitsandVegetables">Fruits and vegetables</a>
						<a class="dropdown-item" href="<?php echo base_url()?>Category?category=dairy">Dairy Products</a>
						<a class="dropdown-item" href="<?php echo base_url()?>Category?category=bakery">Bakery</a>
						<a class="dropdown-item" href="<?php echo base_url()?>Category?category=HB">Health & Beauty</a>
						
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
				<li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
			</ul>
	</nav>
</body>
</html>