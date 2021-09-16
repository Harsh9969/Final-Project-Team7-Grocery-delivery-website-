<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Mania Admin </title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">


		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="" class="nav-link">Home</a>
				</li>
				
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Logout/adminlogout">
					<i class="fas fa-sign-out-alt">Logout</i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="" class="brand-link">
				<img src="<?php echo base_url(); ?>assets/images/GM.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Grocery Maina</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				


				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				
						<li class="nav-item">
							<a href="<?php echo base_url()?>Dashboardadmin/" class="nav-link active">
								<i class="nav-icon fas fa-th"></i>
								<p>
								Add Products
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url()?>Dashboardadmin/viewproduct" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									View Products
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url()?>Dashboardadmin/viewuser" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									View User
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url()?>Dashboardadmin/vieworder" class="nav-link ">
								<i class="nav-icon fas fa-th"></i>
								<p>
									View Order
								</p>
							</a>
						</li>
				
						
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard</h1>
						</div><!-- /.col -->
						
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- SELECT2 EXAMPLE -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title">Update User</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<div class="my-account-body">
									
									<!-- <form method="POST" action="<?php echo base_url(); ?>Dashboardadmin/addproduct" class="eflux-login-form"> -->
									<div class="row">
									<form action="<?php echo base_url()?>Dashboardadmin/updateuser" method="POST" class="eflux-login-form">
									<input type="text" name="userid" value="<?php echo $user->id?>" hidden>
								<div class="row">
									<div class="col-lg-6">
										<div class="input-item">
											<label>First Name</label>
											<input type="text" name="fname" value="<?php echo $user->fname;?>" placeholder="First Name" />
										</div>
									</div>

									<div class="col-lg-6">
										<div class="input-item">
											<label>Last Name</label>
											<input type="text" name="lname" value="<?php echo $user->lname;?>"  placeholder="Last Name" />
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-item">
											<label>Address</label>
											<input type="text" name="add" value="<?php echo $user->address;?>"  placeholder="Address" />
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-item">
											<label>City</label>
											<input type="text" name="city" value="<?php echo $user->city;?>"  placeholder="City" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="input-item">
											<label>Zipcode</label>
											<input type="text" name="zpcode" placeholder="Zipcode" value="<?php echo $user->zipcode;?>"  max='6' min='6' />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-item">
											<label>State</label>
											<input type="text" name="state" value="<?php echo $user->state;?>"  placeholder="State" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-item">
											<label>Country</label>
												<select class="form-control" id="sel1" value="<?php echo $user->coutry;?>" >
													<option selected>Canada</option>
												</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="input-item">
											<label>Email</label>
											<input type="email" value="<?php echo $user->email;?>"  name="email" placeholder="Email Address" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="input-item">
											<label>Mobile</label>
											<input type="text" value="<?php echo $user->mobile;?>"  name="mobile" placeholder="Phone" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="input-item">
											<label>Password</label>
											<input type="password" value="<?php echo $user->password;?>"  name="password" placeholder="Password" />
										</div>
									</div>
								</div>
								<h5><?php echo validation_errors(); ?></h5>
									</div>

									<div>
										<button type="submit" class="btn btn-primary" onclick="alert('user updated')">Update</button>
									</div>
									</form>
								</div>
							</div>
							<!-- /.row -->


							<!-- /.row -->
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy;2021 </strong>
			All rights reserved.
			
		</footer>

		
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
</body>

</html>
