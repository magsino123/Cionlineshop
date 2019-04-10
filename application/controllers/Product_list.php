<?php 
	
	class Product_list extends CI_Controller
	{		
		public function shop($page = 'product_list')
		{
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}
			//$data['products'] = $this->post_model->get_post();
			$this->load->model('product_model');
			$data['data']=$this->product_model->get_all_product();
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		
	}