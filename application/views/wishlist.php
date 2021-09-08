 <!-- dashboard-section start -->
 <section id="dashboard-nav" class="dashboard-section">
	<div class="container">
		<div class="dashboard-body wishlist">
			<div class="wishlist-header">
				<h6>Shopping wishlist</h6>
			</div>
			<div class="wish-list-container">
				<?php
				$total=0;
				foreach($products as $item)
				{
					$total=$total+1;
					
					$this->db->select('*');
					$this->db->from('product');
					$this->db->where('id', $item->itemid);
					$query = $this->db->get();
					$result=$query->result();
					//echo $result[0]->price;
					?>

					
					<div id="cart<?php echo $item->itemid?>" class="wishlist-item product-item d-flex align-items-center">
					<span class="close-item" onclick="removeitem('<?php echo  $item->itemid?>');" ><i class="fas fa-times"></i></span>
					<div class="thumb">
						<a><img src="assets/images/products/<?php echo $result[0]->image?>" alt="products"></a>
					</div>
					<div class="product-content">
						<a href="product-detail.html" class="product-title"><?php echo $result[0]->name;?></a>
					</div>
				</div>

				<?php }?>
				
				<div>
					
					<?php if($total==0)
					{
						echo "No Item In wishlist";
					}?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- dashboard-section end -->

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
					alert("Product Remove to wishlist");
					document.getElementById("cart" + proid).remove();
					location.reload();
				}

			}
		}
		xhttp.open("GET", url + "Wishlist/removefromwishlist?productid=" + proid, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//  xhttp.send("password=" + x.value + "&email=" + z.value);
		xhttp.send();
	}
</script>
