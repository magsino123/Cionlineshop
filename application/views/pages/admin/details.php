<div class="container">
	
		
		
		
		<div class="col-sm-6">
			<center><img style="height: 600px;" src="<?php echo base_url();?>assets/images/<?php echo $product['product_image'];?>"></center>
		</div>
		<div class="col-sm-6" style="padding: 200px; padding-top: 200px;">
			
			<h4 style="font-size: 25px; width: 400px;">Product Name: <strong><?php echo $product['product_name'];?></strong><br>
				<br> 
				Product Quantity: <strong><?php echo $product['qty'];?></strong><br><br>

				Product Price: <strong><?php echo $product['product_price'];?>.00php</strong>
				<br><br>

				<button type="submit" class="btn btn-warning">Update Product Quantity</button>
				<a href="<?php echo base_url();?>admin_home/adminhome"><button type="button" class="btn btn-danger">Back</button></a>
			</h4>
		</div>
	
	
</div>