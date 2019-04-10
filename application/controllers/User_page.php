<?php 
	
	class User_page extends CI_Controller
	{		
		public function user_page($page = 'getuser')
		{
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}
			//$data['products'] = $this->post_model->get_post();
			$this->load->model('product_model');
			$data['data']=$this->product_model->get_all_product();
			$data['title'] = ucfirst($page);
			$this->load->view('templates/admin_header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		
	}