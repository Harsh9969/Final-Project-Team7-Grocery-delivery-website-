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
					<a class="nav-link" href="<?php echo base_url(); ?>Logout/adminlogout">
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
						<a href="<?php echo base_url()?>Dashboardadmin/dashboard" class="nav-link ">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url()?>Dashboardadmin/" class="nav-link ">
						<i class="fas fa-box-open"></i></i>
							<p>
							Add Products
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url()?>Dashboardadmin/viewproduct" class="nav-link ">
						<i class="fas fa-box-open"></i></i>
							<p>
								View Products
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url()?>Dashboardadmin/viewuser" class="nav-link">
						<i class="fas fa-users"></i>
							<p>
								View User
							</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo base_url()?>Dashboardadmin/vieworder" class="nav-link active">
						<i class="fas fa-shopping-cart"></i>
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
							<h3 class="card-title">View order</h3>

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
									 <!-- dashboard-section start -->
 <?php
 $ietmarry=explode("-",$order->itemid);
 $qtyarry=explode("-",$order->qty);
 $c=0;
 ?>
 <section class="dashboard-section">
                <div class="container">
                    <div class="track-order-item bg-color-white">
                        <div class="d-flex justify-content-between track-number-link align-items-center">
                            <div>
                                <h6 class="order-number">Order#<?php echo $order->id?></h6>
                                <p class="date"><?php echo $order->orderdate?></p>
                                <p class="price">USD <?php echo $order->total?></p>
                            </div>
                            <div>
                                <a href="track-order-single.html" class="order-btn">Track Order</a>
                            </div>
                        </div>
                        <div class="order-details">
                            <div class="order-details-head">
                                <h6>Order Details</h6>
                            </div>
                            <div class="order-details-container">
								<?php 
									 foreach($ietmarry as $item)
									 {
										$this->db->select('*');
										$this->db->from('product');
										$this->db->where('id', $item);
										$query = $this->db->get();
										$data=$query->result();
										 ?>
										 
								
                                <div class="order-details-item d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="thumb d-flex flex-wrap align-items-center">
                                        <a  onclick="openModal()"><img src="assets/images/products/cart/03.png" alt="products"></a>
                                        <div class="product-content">
                                            <a  onclick="openModal()" class="product-title"><?php echo $data[0]->name?></a>
                                        </div>
                                    </div>
                                    
                                    <div class="product-content pl-0">
                                        <div class="product-cart-info">
                                            <?php echo  $qtyarry[$c];?> * <?php echo $data[0]->price?>
                                        </div>
                                    </div>
                                    <div class="product-content pl-0">
                                        <div class="product-price">
                                          <span class="ml-4">$  <?php echo  $qtyarry[$c]*$data[0]->price;?></span>
                                        </div>
                                    </div>
                                </div>
								<?php 
								$c=$c+1; }
								?>
                                <!-- <div class="order-details-item d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="thumb d-flex flex-wrap align-items-center">
                                        <a  onclick="openModal()"><img src="assets/images/products/cart/03.png" alt="products"></a>
                                        <div class="product-content">
                                            <a  onclick="openModal()" class="product-title">Daisy Cont Oil</a>
                                        </div>
                                    </div>
                                    
                                    <div class="product-content pl-0">
                                        <div class="product-cart-info">
                                            1kg
                                        </div>
                                    </div>
                                    <div class="product-content pl-0">
                                        <div class="product-price">
                                            <del>$8.00</del><span class="ml-4">$5.00</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="track-order-info">
                            <ul class="to-list">
                                <li class="inc-vat d-flex flex-wrap justify-content-between">
                                    <span class="t-title">Total</span>
                                    <span class="desc">$ <?php echo $order->total?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="delevary-time">
                            <p>Ddelevary Time 10 may, 10am - 12am</p>
                        </div>
                        <div class="track-order-footer">
                            <p>Helpline - <a href="#">Call Us</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- dashboard-section end -->

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
