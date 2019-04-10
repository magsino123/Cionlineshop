<?php
class Pro_details extends CI_Controller
{
	
	public function cart_view($id = NULL)
	{
		$data['product'] = $this->product_model->fetch_all($id);
		if (empty($data['product'])) {
			show_404();
		}
		$this->load->view('templates/admin_header');
		$this->load->view('pages/admin/details',$data);
		$this->load->view('templates/footer');
	}
}