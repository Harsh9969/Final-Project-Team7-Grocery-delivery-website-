
			<!-- banner-section start -->
			<section class="banner-section bg-img3 d-flex align-items-center">
				<div class="banner-content-area">
					<div class="container">
						<div class="banner-content">
							<h6>Organic and fresh food</h6>
							<h2>Get freshness delivered<br>on your doorstep.</h2>
						</div>
					</div>
				</div>
			</section>
			<!-- banner-section end -->



			<!-- info-box-section start -->
			<section class="info-box-section">
				<div class="container">
					<div class="info-box-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="info-box-item d-sm-flex text-center text-sm-left">
									<div class="info-icon">
										<img src="assets/images/info-item/info.svg" alt="info icon">
									</div>
									<div class="info-content">
										<h6>Place order</h6>
										
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="info-box-item d-sm-flex text-center text-sm-left">
									<div class="info-icon">
										<img src="assets/images/info-item/credit-card.svg" alt="info icon">
									</div>
									<div class="info-content">
										<h6>Easy Payment</h6>
										
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="info-box-item d-sm-flex text-center text-sm-left">
									<div class="info-icon">
										<img src="assets/images/info-item/info.svg" alt="info icon">
									</div>
									<div class="info-content">
										<h6>First Delivery</h6>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- info-box-section end -->
			
			<!-- trending product-section start -->
				<!-- page-content -->
<section class="page-content section-ptb-90">
	<div class="container">
	<div class="section-heading">
						<h4 class="heading-title"><span class="heading-circle"></span> Trending Products</h4>
					</div>
		<div class="row">

			<div class="col-lg-12 order-lg-first">
				<div class="row product-list">
					<?php
					 	$c=0;
					 foreach($products as $item)
					{ 
						$c=$c+1;
						if($c==7)
						{
							break;
						}
						?>
							<div class="col-sm-6 col-xl-4">
								<div class="product-item">
									<div class="product-thumb">
										<a><img src="<?php echo base_url();?>assets/images/products/<?php echo $item->image?>" style="width:180px;height:160px;" alt="product"></a>
										<span class="batch sale">Sale</span>
										<a class="wish-link" onclick="addtowishlist('<?php echo $item->id?>')">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
											</svg>
										</a>
									</div>
									<div class="product-content">
										<a href="#" class="cata"><?php echo $item->category?></a>
										<h6><a href="" class="product-title"><?php echo $item->name?></a></h6>
										<p class="quantity"><?php echo $item->details?></p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="price">$<?php echo $item->price?></div>
										</div>
											<div>
												<button onclick="addtocart('<?php echo $item->id?>')" class="cart-btn"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
											</div>							
									</div>
								</div>
							</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page-content -->


			<!-- trending product-section end -->

	<section class="home-blog bg-sand" id="blog">
    <div class="container">
		<div class="row ">
			<div class="col-md-12">
				<div class="media blog-media">
				  <a href=""><img  src="<?php echo base_url();?>assets/images/blog.jpg" class="d-flex" alt="Blog"></a>
				 
				  <div class="media-body">
				    <a href=""><h5 class="mt-0">Grocery Mania is widely growing  day-by-day in sales  through online delivery system</h5></a>
				    <p>Online grocers can use AI and machine-learning models to provide a more personalized experience for their customers.</p>
				 
				  </div>
				</div>
			</div>
		</div>
	</section>
<style>
	
.home-blog {
    padding-top: 80px;
    padding-bottom: 80px;
}
@media (min-width: 992px) {
    .home-blog {
        padding-top: 21px;
        padding-bottom: 60px;
    }
}

.home-blog .media {
    margin-top: 50px;
}
@media (min-width: 768px) {
    .home-blog .media {
        margin-top: 30px;
    }
}
.bg-sand {
    background-color:#FDF2E9;
}
.media.blog-media {
    margin-top: 30px;
    position: relative;
    display: block;
}
@media (min-width: 992px) {
    .media.blog-media {
        display: table;
    }
}

.media.blog-media > a {
    position: relative;
    display: block;
}
@media (min-width: 992px) {
    .media.blog-media > a {
        display: table-cell;
        vertical-align: top;
        min-width: 200px;
    }
}
@media (min-width: 1200px) {
    .media.blog-media > a {
        min-width: 230px;
    }
}
.media.blog-media > a:before {
    position: absolute;
    content: "";
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    opacity: 0;
    transform: scale(0);
    transition: transform 0.3s ease, opacity 0.3s;
    background: rgba(12, 198, 82, 0.7);
}
.media.blog-media > a img {
    width: 100%;
	border-radius:20px;
}


.media.blog-media .media-body {
    border: 1px solid #efeff3;
    padding: 30px 30px 10px;
    font-size: 18px;
    background: #fff;
    border-top: none;
	border-radius:20px;
}
@media (min-width: 992px) {
    .media.blog-media .media-body {
        padding: 15px 20px 10px;
        border-top: 1px solid #efeff3;
        border-left: none;
        display: table-cell;
        vertical-align: top;
    }
}
@media (min-width: 1200px) {
    .media.blog-media .media-body {
        padding:63px 90px 91px;
    }
}
.media.blog-media .media-body h5 {
    transition: color 0.3s ease;
    margin-bottom: 15px;
}
@media (min-width: 992px) {
    .media.blog-media .media-body h5 {
        font-size: 20px;
    }
}
@media (min-width: 1200px) {
    .media.blog-media .media-body h5 {
        margin-bottom: 15px;
        font-size: 18px;
    }
}

	</style>
<script>
	function addtocart(proid)
	{
		//alert("function calling");
		let url="<?php echo base_url();?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		 {
			if (this.readyState == 4 && this.status == 200)
			{
				if(this.responseText=="Please Login First")
				{
					alert("Please Login First");
				}
				else
				{
					alert("Product added to cart");
				}
				
			}
		}
		xhttp.open("GET", url+"Cart/addtocart?productid=" + proid, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //  xhttp.send("password=" + x.value + "&email=" + z.value);
         xhttp.send();
	}

	function addtowishlist(proid)
	{
		let url="<?php echo base_url();?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		 {
			if (this.readyState == 4 && this.status == 200)
			{
				alert('Product add To wishlist');
			}
			else{
				alert('You need to login First');
			}
		}
		xhttp.open("GET", url+"Wishlist/addtowishlist?productid=" + proid, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //  xhttp.send("password=" + x.value + "&email=" + z.value);
         xhttp.send();
	}
</script>
