</div>
<!-- Footer -->
<footer class="page-footer font-small blue" style="position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Interns:
    <a href="#"> Simple CRUD</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var product_id    = $(this).data("productid");
			var product_name  = $(this).data("productname");
			var product_price = $(this).data("productprice");
			var quantity   	  = $('#' + product_id).val();
			$.ajax({
				url : "<?php echo site_url('product/add_to_cart');?>",
				method : "POST",
				data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		
		$('#detail_cart').load("<?php echo site_url('product/load_cart');?>");

		
		$(document).on('click','.romove_cart',function(){
			var row_id=$(this).attr("id"); 
			$.ajax({
				url : "<?php echo site_url('product/delete_cart');?>",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>
</body>
</html>