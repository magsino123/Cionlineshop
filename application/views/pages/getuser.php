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
			<div class="panel-heading"> <i class="glyphicon glyphicon-th-list"></i> Product List</div>
			<div class="panel-body">
				<table class="table" id="productTable">
			  	 <thead>
                                    <tr>                    
                                        <th>Product Name</th>    
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                        <th>Product Image</th>  
                                                                                  
                                        
                                    </tr>
                                </thead>
                                <tbody>
                 <style>
                   th,td{
                    text-align: center;
                   }
                 </style>

                               <?php foreach($data as $row):?>
                 				 <tr >
                                   <td><?php echo $row['product_name'];?></td> 
                                   <td><?php echo $row['product_price'];?></td>
                                   <td><?php echo $row['qty'];?></td>                                          
                                   <td><img src="<?php echo base_url().'assets/images/'.$row['product_image'];?>" style="width: 80px; height: 80px;"></td> 
                                    </tr>
                                <?php endforeach;?>
                 
                           
                                </tbody>
                            </table>
                            <a href="customer_list.php" style="float: right;">View more...</a>
				<!--<div id="calendar"></div>-->
			</div>	
		</div>
		
	</div> 
<a href="<?php echo base_url('');?>"></a>