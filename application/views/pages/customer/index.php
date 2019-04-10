
<div class="container"><br/>
	<hr/>
	<div class="row">
		<div class="col-md-8">
			<h4>Product</h4>
			<div class="row">
			<?php foreach ($data as $row) : ?>
				<div class="col-md-4">
					<div class="thumbnail">
						<img width="200" src="<?php echo base_url().'assets/images/'.$row['product_image'];?>">
						<div class="caption">
							<h4><?php echo $row['product_name'];?></h4>
							<div class="row">
								<div class="col-md-7">
									<h4><?php echo number_format($row['product_price']);?></h4>
								</div>
								<div class="col-md-5">
									<input type="number" name="quantity" id="<?php echo $row['product_id'];?>" value="1" class="quantity form-control">
								</div>
							</div>
							
							<!--<button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Add To Cart</button>-->
							<button class="add_cart btn btn-success btn-block" data-productid="<?php echo $row['product_id'];?>" data-productname="<?php echo $row['product_name'];?>" data-productprice="<?php echo $row['product_price'];?>">Add To Cart</button>
						</div>
					</div>
				</div>
			<?php endforeach;?>
				<!-- Modal -->

<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true" style="background-color: rgba(50, 50, 50, 0.3);">
   <br /><br /><br />
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            
            
            <h4 class = "modal-title"  id = "myModalLabel">
               <h5 style="padding-right: 500px; font-size: 20px;">Message</h5>
            </h4>

            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
         </div>
         
         <div class = "modal-body">
            Goto login menu to purchase items, Thank you :) <br>Click Okay button to Continue.
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal">
              <i class="fa fa-times"></i> Okay
            </button>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
			</div>
<br><br><br>
		</div>
		<div class="col-md-4">
			<h4>Shopping Cart</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Items</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Total</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="detail_cart">

				</tbody>
				
			</table>
		</div>
	</div>
</div>

