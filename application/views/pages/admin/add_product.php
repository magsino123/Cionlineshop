<div class="container">
	
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				
				<a href="product.php" style="text-decoration:none;color:black;">
					View Order History
					<span class="badge pull pull-right"><i class="fa fa-shopping-cart"></i></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="<?php echo base_url().'update_ctrl/show_product_id'?>" style="text-decoration:none;color:black;">
					Update Product Details
					<span class="badge pull pull-right"><i class="fa fa-edit"></i></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	
	  
		<div class="col-md-4">
			<div class="panel panel-info">
			<div class="panel-heading">
				<a href="<?php echo base_url().'product/addprod'?>" style="text-decoration:none;color:black;">
					 Add Product
					<span class="badge pull pull-right"><i class="fa fa-plus"></i></span>
				</a>
					
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
		</div> <!--/col-md-4-->
	

	<div class="col-md-4">
		<div class="panel panel-primary">
		  <div class="panel-heading" style="background-color:#245580;">
		    <h1><center><img src="<?php echo base_url().'assets/logo/admin.ico';?>" width="80" height="80"></center></h1>
		  </div>

		  <div class="cardContainer">
		    <?php
        $user = $this->session->userdata('user');
        extract($user);
      ?>
      <p style="text-align: center;">Welcome: <strong><?php echo strtoupper($username); ?></strong></p>
    
		  </div>
		</div> 
		<br>
		<div class="panel panel-danger">
		  <div class="panel-heading">
		    <center><h1><i class="fa fa-calendar"></i></h1></center>
		  </div>

		  <div class="cardContainer">
		    <center><p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p></center>
		  </div>
		</div> 
		<br/>

		
<br>

	</div>
	

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="fa fa-plus"></i> Add Product</div>
			<div class="panel-body">
				 <form action="<?php echo base_url().'addproduct/upload'?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Product Name" name="proname">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Product Price" name="proprice">
					</div>
					<div class="form-group">
					    <input type="file" class="form-control" placeholder="Product Image" name="userfile">
					</div>
					<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="save" id="register-submit" tabindex="4" class="form-control btn btn-success" value="Submit">
											</div>
										</div>
									</div>
				</form>
			</div>	
		</div>
		
	</div> 
