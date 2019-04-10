<?php
defined('BASEPATH') OR exit('No Direct script allowed to access');

class Addproduct extends CI_Controller
{

	public function index()
	{
		$error = array(
			'error_image' => '',
			'error_name' => ''
		);
		$this->load->view('pages/admin/add_product',$error);
		//$data['tbl_company'] = $this->product_model->get_post();
	}

	public function upload(){
		$this->load->helper(array('form','file','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('proname','ProName','trim|required');
		$this->form_validation->set_rules('proprice','ProPrice','trim|required');
		$config_image = array();
		$config_image['upload_path'] = './assets/images/';
		$config_image['allowed_types'] = 'jpg|png|gif';
		$config_image['max_size'] 	= '1024';

		$this->load->library('upload',$config_image);


		if ($this->form_validation->run()== false and empty($_FILES['userfile']['name'][0])) {
			$error = array(
				'error_image' => 'please Choose image to upload',
				'error_name' => 'please enter name'
			);
			$this->load->view('pages/admin/add_product',$error);
			echo "1";
		}elseif ($this->form_validation->run()== true and empty($_FILES['userfile']['name'][0])) {
			$error = array(
				'error_image' => 'please Choose image to upload',
				'error_name' => ''
			);
			$this->load->view('pages/admin/add_product',$error);
			echo "2";
		}elseif ($this->form_validation->run()== false and !empty($_FILES['userfile']['name'][0])) {
			!$this->upload->data();

			$error = array(
				'error_image' => '',
				'error_name' => 'Please enter name'
			);
			$this->load->view('pages/admin/add_product',$error);
			echo "3";
		}elseif ($this->form_validation->run()== true and !empty($_FILES['userfile']['name'][0])) {
			$this->upload->do_upload();
			$data = array('upload_data' => $this->upload->data());
			$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']); 
			$company = array(
				'product_name' => $this->input->post('proname'),
				'product_price' => $this->input->post('proprice'),
				'product_image' => $_FILES['userfile']['name']
			);

			$this->load->model('Product_model');			
			$this->Product_model->insert($company);
				echo "<script>alert('done'); window.location='".base_url('product/addprod')."';</script>";

			
		}

		/**if (!$this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_image', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
		}**/
	}

	public function image_resize(){
		$config_resize = array();
		$config_resize['image_library'] = 'gd2';
		$config_resize['maintain_ratio'] = TRUE;
		$config_resize['width'] = 75;
		$config_resize['height'] = 50;
		$config_resize['new_image'] = './assets/image/';
		$this->load->library('image_lib', $config_resize);
		$this->image_lib->resize();
	}
}
?>
