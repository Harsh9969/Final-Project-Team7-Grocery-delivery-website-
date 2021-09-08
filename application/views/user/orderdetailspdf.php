 <!-- dashboard-section start -->
 <?php
 $ietmarry=explode("-",$order->itemid);
 $qtyarry=explode("-",$order->qty);
 $c=0;
 ?>
 <section class="dashboard-section" >
                <div class="container"id="HTMLtoPDF" >
                    <div class="track-order-item bg-color-white">
                        <div class="d-flex justify-content-between track-number-link align-items-center">
                            <div >
                                <h6 class="order-number">Order#<?php echo $order->id?></h6>
                                <p class="date"><?php echo $order->orderdate?></p>
                                
                            </div>
                          
                        </div>
                        <div class="order-details">
                            <div class="order-details-head">
                                <h6>Order Details</h6>
                            </div>
                            <div class="order-details-container">
								
								<table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                    </tr>
                                    <?php 
									 foreach($ietmarry as $item)
									 {
										$this->db->select('*');
										$this->db->from('product');
										$this->db->where('id', $item);
										$query = $this->db->get();
										$data=$query->result();
										 ?>
										 
                                    <tr>
                                        <td><?php echo $data[0]->name?></td>
                                        <td> <?php echo  $qtyarry[$c];?></td>
                                        <td>$<?php echo $data[0]->price?></td>
                                        <td>$<?php echo  $qtyarry[$c]*$data[0]->price;?></td>
                                    </tr>
                                    
                                    <?php 
                                    $c=$c+1; }
                                    ?>

                                    <tr>
                                        <td colspan="3">Total</td>
                                        <td>$<?php echo $order->total?></td>
                                    </tr>
                                </table>
                               
                               
                            </div>
                        </div> 
                    </div>
                </div>   
                <button class="btn btn-warning" style="margin-left:50px"><a href="#" onclick="HTMLtoPDF()" id="orddwn">Download PDF</a></button>  
            </section>
            
            
            <!-- dashboard-section end -->
    <script>windows.onload=HTMLtoPDF;</script>
    <script src="<?php echo base_url();?>assets/pdf/js/pdfFromHTML.js"></script>
    <script src="<?php echo base_url();?>assets/pdf/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/pdf/js/scripts.js"></script>
	<script src="<?php echo base_url();?>assets/pdf/js/jspdf.js"></script>
	<script src="<?php echo base_url();?>assets/pdf/js/jquery-2.1.3.js"></script>
	<script src="<?php echo base_url();?>assets/pdf/js/pdfFromHTML.js"></script>
    