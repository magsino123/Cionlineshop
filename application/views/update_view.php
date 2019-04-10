<style>
	#container {
width:622px;
height:610px;
margin:50px auto
}
#wrapper {
width:auto;
padding:0 20px 20px;
background:linear-gradient(#fff,#AFEBD8);
border:1px solid #ccc;
box-shadow:0 0 5px;
font-family:'Marcellus',serif;
float:left;
margin-top:10px
}
#menu {
float:left;
width:200px;
margin-top:-30px
}
#detail {
float:left;
width:320px;
margin-top:-27px
}
a {
text-decoration:none;
color:blue
}
a:hover {
color:red
}
li {
padding:4px 0
}
h1 {
text-align:center;
font-size:28px
}
hr {
border:0;
border-bottom:1.5px solid #ccc;
margin-top:-10px;
margin-bottom:30px
}
#hide {
display:none
}
form {
margin-top:-40px
}
label {
font-size:17px
}
input {
width:100%;
padding:8px;
margin:5px 0 15px;
border:none;
box-shadow:0 0 5px
}
input#submit {
margin-top:10px;
font-size:18px;
background:linear-gradient(#22abe9 5%,#36caf0 100%);
border:1px solid #0F799E;
color:#fff;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
input#submit:hover {
background:linear-gradient(#36caf0 5%,#22abe9 100%)
}
p {
font-size:18px;
font-weight:700;
color:
}
.a{
	font-family: maiandra gd;
	font-weight:700;
}
.one{
	width: 500px;
	height: 500px;
}
</style>
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
			<div class="panel-heading"> <i class="glyphicon glyphicon-edit	"></i> Update Details</div>
			<div class="panel-body">
				<div id="wrapper">
	<div class="col-sm-12">
		<div class="col-sm-6 one">
			<p>Click On Product name</p>
<!-- Fetching Names Of All Students From Database -->
<ol>
<?php foreach ($product as $student): ?>
<li><a class="a" href="<?php echo base_url() . "update_ctrl/show_product_id/" . $student->product_id; ?>"><?php echo $student->product_name; ?></a></li>
<?php endforeach; ?>
</ol>
		</div>
		<div class="col-sm-6" style="padding: 12">
			<?php foreach ($product_id as $student): ?>
<p>Edit Product Price and Product Quantity</p>
<br><br>
<form method="post" action="<?php echo base_url() . "update_ctrl/update_product_id1"?>">
<label id="hide">Id :</label>
<center><img width="200" src="<?php echo base_url().'assets/images/'.$student->product_image;?>"></center><br>
<input type="text" id="hide" name="did" value="<?php echo $student->product_id; ?>">
<label>Product Price:</label>
<input type="text" name="demail" value="<?php echo $student->product_price; ?>">
<label>Product Quantity :</label>
<input type="text" name="dmobile" value="<?php echo $student->qty; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>
		</div>
	</div>
				
			</div>	
		</div>
		
	</div> 
<a href="<?php echo base_url('');?>"></a>