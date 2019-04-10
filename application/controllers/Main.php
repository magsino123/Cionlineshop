<?php 
	
	class Main extends CI_Controller
	{		
		public function main_page($page = 'home')
		{
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}
			//$data['products'] = $this->post_model->get_post();
			$this->load->model('product_model');
			//$data['data']=$this->product_model->get_all_product();
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
		public function login(){
			$this->load->view('templates/header');
			$this->load->view('pages/login_view');
			$this->load->view('templates/footer');
		}

public function validate(){
			$this->load->view('templates/header');
			echo "invalid username and password";
			$this->load->view('pages/login_view');
			$this->load->view('templates/footer');
		}

		public function __construct()
 {
 //call CodeIgniter's default Constructor
 parent::__construct();
 
 //load database libray manually
 $this->load->database();
 
 //load Model
 $this->load->model('Product_model');
 }
 
 public function savedata()
 {
 //Check submit button 
 if($this->input->post('save'))
 {
 //get form's data and store in local varable
 $n=$this->input->post('username');
 $e=$this->input->post('password');
 $m=$this->input->post('email');	
 
//call saverecords method of Hello_Model and pass variables as parameter
 $this->Product_model->saverecords($n,$e,$m); 
 $this->load->view('templates/header.php');
 $this->load->view('pages/login_view.php');
// $this->load->view('templates/footer.php');
 echo "Records Saved Successfully";
	}
}


	public function customer(){
		$this->load->model('product_model');
		$data['data']=$this->product_model->get_all_product();
		$this->load->view('templates/customer_header');
		$this->load->view('pages/customer/index');
		$this->load->view('templates/footer');
	}

	public function adminlog(){
		$this->load->view('templates/header');
		$this->load->view('adminlogin');
		$this->load->view('templates/footer');
	}
} 	
