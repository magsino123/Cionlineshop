<?php 
	
	class Order_ctrl extends CI_Controller
	{		
		public function order($page = 'order_view')
		{
			if (!file_exists(APPPATH.'views/pages/admin/'.$page.'.php')) {
				show_404();
			}
			//$data['products'] = $this->post_model->get_post();
			//$this->load->model('product_model');
			//$data['data']=$this->product_model->get_all_product();
			$data['title'] = ucfirst($page);
			$this->load->view('templates/admin_header');
			$this->load->view('pages/admin/'.$page, $data);
			$this->load->view('templates/footer');
		}

		
	}