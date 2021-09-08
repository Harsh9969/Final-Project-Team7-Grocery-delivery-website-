<!-- page-content -->
<section class="page-content section-ptb-90">
	<div class="container">
		<div class="row">

		<div class="col-lg-12 order-lg-first">
				<div class="row product-list">
					<?php
					$c = 0;
					foreach ($products as $item) {
						$c = $c + 1;
						if ($c == 7) {
							break;
						}
					?>
						<div class="col-sm-6 col-xl-4">
							<div class="product-item">
								<div class="product-thumb">
									<a><img src="<?php echo base_url(); ?>assets/images/products/<?php echo $item->image ?>" style="width:180px;height:160px;" alt="product"></a>
									<span class="batch sale">Sale</span>
									<a class="wish-link" onclick="addtowishlist('<?php echo $item->id ?>')">
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
										</svg>
									</a>
								</div>
								<div class="product-content">
									<a href="#" class="cata"><?php echo $item->category ?></a>
									<h6><a href="" class="product-title"><?php echo $item->name ?></a></h6>
									<p class="quantity"><?php echo $item->details ?></p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="price">$<?php echo $item->price ?></div>
									</div>
									<div id="cart<?php echo $item->id ?>">
											<?php
												$this->db->from('cart');
												$this->db->select('*');
												$this->db->where('userid', $this->session->User);
												$this->db->where('itemid', $item->id);
												$query = $this->db->get();
												$result=$query->result();
												// die(print_r($result));
												if($result)
												{
												
											?>
													<div class='price-increase-decrese-group d-flex' style='margin-left: 100px'>
														<span class='decrease-btn'>
															<button type='button' onclick='removetocart("<?php echo $item->id ?>")'  class='btn quantity-left-minus' id="btnrem" data-type='minus' data-field=''>-</button>
														</span>
														<input type='text' name='quantity' readonly class='form-controls input-number' style='background-color:#59b828;border:none;width:25px' value='<?php echo $result[0]->qty;?>'>
														<span class='increase'>
															<button type='button' onclick='addtocart("<?php echo $item->id ?>")' class='btn quantity-right-plus'id="btnadd" data-type='plus' data-field=''>+</button>
														</span>
													</div>
											<?php
											}
											else{?>
												<button onclick="addtocart('<?php echo $item->id ?>')" class="cart-btn" id="btnadd"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
											<?php
											}
										?>
										
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page-content -->
<style>
.price-increase-decrese-group {
		background-color: #59b828;
		padding: 0px 5px;
		border-radius: 5px;
		width: 100px;
	}

	.product-details-content .price-increase-decrese-group {
		margin-bottom: 20px;
	}
</style>
<script>
	function addtocart(proid) {
		//alert("function calling");
		let url = "<?php echo base_url(); ?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if (this.responseText == "Please Login First") {
					alert("Please Login First");
				} else {
					alert("Product added to cart");
					document.getElementById("cart" + proid).innerHTML =
					 "<div class='price-increase-decrese-group d-flex' style='margin-left: 100px'><span class='decrease-btn'><button onclick='removetocart("+proid+")' type='button' class='btn quantity-left-minus' data-type='minus' data-field=''>-</button></span><input type='text' name='quantity' readonly class='form-controls input-number' style='background-color:#59b828;border:none;width:25px' value='" + this.responseText + "'><span class='increase'><button type='button' onclick='addtocart("+proid+")' class='btn quantity-right-plus' data-type='plus' data-field=''>+</button></span></div>";
				}

			}
		}
		xhttp.open("GET", url + "Cart/addtocart?productid=" + proid, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//  xhttp.send("password=" + x.value + "&email=" + z.value);
		xhttp.send();
	}

	function removetocart(proid) {
		//alert("function calling");
		let url = "<?php echo base_url(); ?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if (this.responseText == "Please Login First") {
					alert("Please Login First");
				}
				else if(this.responseText=="delete")
				{
					document.getElementById("cart" + proid).innerHTML =
					'<button onclick="addtocart('+proid+')" class="cart-btn"><i class="fas fa-shopping-cart"></i>Add to Cart</button>';
				} else {
					alert("Product Remove to cart");
					document.getElementById("cart" + proid).innerHTML =
					 "<div class='price-increase-decrese-group d-flex' style='margin-left: 100px'><span class='decrease-btn'><button type='button' onclick='removetocart("+proid+")'  class='btn quantity-left-minus' data-type='minus' data-field=''>-</button></span><input type='text' name='quantity' readonly class='form-controls input-number' style='background-color:#59b828;border:none;width:25px' value='" + this.responseText + "'><span class='increase'><button type='button' onclick='addtocart("+proid+")' class='btn quantity-right-plus' data-type='plus' data-field=''>+</button></span></div>";
				}

			}
		}
		xhttp.open("GET", url + "Cart/removefromcart?productid=" + proid, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//  xhttp.send("password=" + x.value + "&email=" + z.value);
		xhttp.send();
	}

	function addtowishlist(proid) {
		let url = "<?php echo base_url(); ?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				alert('Product '+this.responseText+' To wishlist');
			}
		}
		xhttp.open("GET", url + "Wishlist/addtowishlist?productid=" + proid, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//  xhttp.send("password=" + x.value + "&email=" + z.value);
		xhttp.send();
	}
</script>
