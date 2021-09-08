 <!-- dashboard-section start -->
 <section id="dashboard-nav" class="dashboard-section">
	<div class="container">
		<div class="dashboard-body wishlist">
			<div class="wishlist-header">
				<h6>Shopping Cart</h6>
			</div>
			<div class="wish-list-container">
				<?php
				$total=0;
				foreach($products as $item)
				{
					
					$this->db->select('*');
					$this->db->from('product');
					$this->db->where('id', $item->itemid);
					$query = $this->db->get();
					$result=$query->result();
					//echo $result[0]->price;
					$total=$total+($item->qty*$result[0]->price);
					?>

					
					<div id="cart<?php echo $item->itemid?>" class="wishlist-item product-item d-flex align-items-center">
					<span class="close-item" onclick="removeitem('<?php echo  $item->itemid?>');" ><i class="fas fa-times"></i></span>
					<div class="thumb">
						<a><img src="assets/images/products/<?php echo $result[0]->image?>" alt="products"></a>
					</div>
					<div class="product-content">
						<a href="" class="product-title"><?php echo $result[0]->name;?></a>
						<div>
							Qty:<?php echo $item->qty;?>
						</div>
						<div class="product-price">
							price:<span class="ml-4">$<?php echo $result[0]->price;?></span> <br>
							Total:<span class="ml-4">$<?php echo $item->qty*$result[0]->price;?></span>
						</div>
						<div id="cart<?php echo $item->itemid ?>">
							<div class='price-increase-decrese-group d-flex' style='margin-left: 100px'>
								<span class='decrease-btn'>
									<button type='button' onclick='removetocart("<?php echo $item->itemid ?>")'  class='btn quantity-left-minus' data-type='minus' data-field=''>-</button>
								</span>
								<input type='text' name='quantity' readonly class='form-controls input-number' style='background-color:#59b828;border:none;width:25px' value='<?php echo $item->qty;?>'>
								<span class='increase'>
									<button type='button' onclick='addtocart("<?php echo $item->itemid ?>")' class='btn quantity-right-plus' data-type='plus' data-field=''>+</button>
								</span>
							</div>
						</div>
					</div>
				</div>

				<?php }?>
				
				<div>
					
					<?php if($total>0)
					{?>
						Total:<?php echo $total;?>
					
					<?php }
					else{
						echo "No Item In cart";
					}?>
				</div>
				
			</div>
		</div>
	</div>
	<?php if($total>0)
	{?>
	<div style="float:right;margin-right:70px;margin-top:20px;">
		<a href="<?php echo base_url();?>Checkout"><button type="button" class="btn btn-warning" id="pchk"> Proceed To Checkout</button></a>
	</div>
	<?php }?>
</section>
<!-- dashboard-section end -->
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
	function removeitem(proid) {
		//alert("function calling");
		let url = "<?php echo base_url(); ?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if (this.responseText == "Please Login First") {
					alert("Please Login First");
				}
				else {
					alert("Product Remove to cart");
					document.getElementById("cart" + proid).remove();
					location.reload();
				}

			}
		}
		xhttp.open("GET", url + "Cart/deletefromcart?productid=" + proid, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//  xhttp.send("password=" + x.value + "&email=" + z.value);
		xhttp.send();
	}

	function addtocart(proid) {
		//alert("function calling");
		let url = "<?php echo base_url(); ?>";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if (this.responseText == "Please Login First") {
					alert("Please Login First");
				} else {
					alert("Product increase to cart");
					location.reload();
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
					alert("Product remove to cart");
					location.reload();
				}
				else
				{
					alert("Product decrease to cart");
					location.reload();
				}

			}
		}
		xhttp.open("GET", url + "Cart/removefromcart?productid=" + proid, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//  xhttp.send("password=" + x.value + "&email=" + z.value);
		xhttp.send();
	}
</script>
