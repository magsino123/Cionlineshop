<?php 
	
	class Admin_home extends CI_Controller
	{		
		public function adminhome($page = 'getuser')
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

		public function newarrive(){
			$this->load->model('product_model');
			$data['data']=$this->product_model->get_all_product();
			$data['title'] = 'new';
			$this->load->view('templates/admin_header');
			$this->load->view('pages/admin/newarrival_prod', $data);
			$this->load->view('templates/footer');
		}

		public function customerpage($pages = 'index')
		{
			if (!file_exists(APPPATH.'views/pages/customer/'.$pages.'.php')) {
				show_404();
			}
			//$data['products'] = $this->post_model->get_post();
			$this->load->model('product_model');
			$data['data']=$this->product_model->get_all_product();
			$data['title'] = ucfirst($pages);
			$this->load->view('templates/customer_header');
			$this->load->view('pages/customer/'.$pages, $data);
			$this->load->view('templates/footer');
		}
	}