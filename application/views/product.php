<!-- page-content -->
<section class="page-content section-ptb-90">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 order-lg-first">
			<div class="row product-list">
					<?php foreach($products as $item)
					{?>
							<div class="col-sm-6 col-xl-4">
								<div class="product-item">
									<div class="product-thumb">
										<a><img src="assets/images/products/<?php echo $item->image?>" style="width:180px;height:160px;" alt="product"></a>
									
										<a class="wish-link" href="#">
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
												<button onclick="addtocart('<?php echo $item->id?>')"   class="cart-btn"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
												<button onclick="addtocart('<?php echo $item->id?>')" class="cart-btn1"><i class=""></i>Buy Now</button>
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

</script>
