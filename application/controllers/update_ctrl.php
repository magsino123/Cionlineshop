<?php
class update_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('update_model');
}
function show_product_id() {
$id = $this->uri->segment(3);
$data['product'] = $this->update_model->show_products();
$data['product_id'] = $this->update_model->show_product_id($id);
$this->load->view('templates/admin_header');
		$this->load->view('update_view', $data);
		$this->load->view('templates/footer');

}
function update_product_id1() {
$id= $this->input->post('did');
$data = array(
'product_price' => $this->input->post('demail'),
'qty' => $this->input->post('dmobile')
);
$this->update_model->update_product_id1($id,$data);
$this->show_product_id();
}
}
?>