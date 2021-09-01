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

					
					<div class="wishlist-item product-item d-flex align-items-center">
					<span class="close-item"><i class="fas fa-times"></i></span>
					<div class="thumb">
						<a><img src="assets/images/products/<?php echo $result[0]->image?>" alt="products"></a>
					</div>
					<div class="product-content">
						<a href="product-detail.html" class="product-title"><?php echo $result[0]->name;?></a>
						<div class="product-cart-info">
							Qty:<?php echo $item->qty;?>
						</div>
						<div class="product-price">
							price:<span class="ml-4">$<?php echo $result[0]->price;?></span> <br>
							Total:<span class="ml-4">$<?php echo $item->qty*$result[0]->price;?></span>
						</div>
					
					</div>
				</div>

				<?php }?>
				
				<div>
					Total:<?php echo $total;?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- dashboard-section end -->

