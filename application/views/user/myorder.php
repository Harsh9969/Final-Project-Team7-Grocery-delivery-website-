            <!-- dashboard-section start -->
            <section id="dashboard-section" class="dashboard-section">
                <div class="container">
                    <div class="row">
                        

                        <div class="col-lg-12">
                          

                            <div class="order-list">
								<?php foreach($orders as $order)
								{
									$ietmarry=explode("-",$order->itemid);
									$count=0;
									foreach($ietmarry as $item)
									{
										$count=$count+1;
									}
								?>
									<div class="order-card mb--30">
										<div class="order-card-header d-flex justify-content-between align-items-center">
											<span class="deliver"><?php echo $order->status;?></span>
											<span class="date"><i class="far fa-clock"></i> <?php echo $order->orderdate;?></span>
										</div>
										<div class="order-card-body">
											<table>
												<thead>
													<tr>
														<th class="text-center">Orders:</th>
														<th class="text-center">Items:</th>
														<th  class="text-right">Total Payments</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">#<?php echo $order->id;?></td>
														<td class="text-center"><?php echo $count;?> Items</td>
														<td class="text-right">$ <?php echo $order->total;?></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="order-card-footer">
											<div class="text-center">
												 <a href="<?php echo base_url();?>Dashboard/myorderdetails?orderid=<?php echo $order->id;?>" id="ordview"> View More</a>
											</div>
										</div>
									</div>
								<?php 
								}?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- dashboard-section end -->
