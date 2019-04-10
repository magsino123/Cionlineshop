 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
	}

	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('main/validate');
		}
		else{
			$this->load->view('login');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->admin_model->login($email, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			 $this->load->model('product_model');
			$data['data']=$this->product_model->get_all_product();
			//$data['title'] = ucfirst($page);
			//$this->load->view('templates/admin_header');
			//$this->load->view('pages/getuser', $data);
			//$this->load->view('templates/footer');
			//$this->load->view('templates/admin_header');
			//$this->load->view('pages/getuser');
			//echo "window.location='".base_url('home')."'";
			//header('location:'.base_url().'pages/getuser');
			redirect('admin_home/adminhome');

		
		}
		}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('admin/login');
		}
		else{
			redirect('/');
		}
		
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		header('location:'.base_url().'main/main_page');
	}

	public function admindashboard(){
		$this->load->model('product_model');
		$data['data']=$this->product_model->get_all_product();
		$this->load->view('templates/admin_header');
		$this->load->view('pages/getuser');
		$this->load->view('templates/footer');
	}

}
