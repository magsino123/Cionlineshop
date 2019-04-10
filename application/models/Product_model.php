<?php
class Product_model extends CI_Model{

	public function get_all_product($slug = FALSE){
		if ($slug === FALSE) {
					$query = $this->db->get('product');
					return $query->result_array();
				}

				$query = $query = $this->db->get('product', array('slug' => $slug));
				return $query->row_array();
	}
	public function saverecords($username,$password,$email)
 {
 $query="insert into users values('','$username','$password','$email')";
 $this->db->query($query);
 }
 public function insert_cart(){
 	$query1 = "insert into product values('','$product_name','$product_price','product_image')";
 	$this->db->query($query1);
 }
public function insert($company){
		$this->db->insert('product', $company);
	}
	public function fetch_all($id = FALSE){
		if ($id === FALSE) {
			$this->db->order_by('product_id');
			$query = $this->db->get('product');
			return $query->result_array();
		}
		$query = $this->db->get_where('product', array('product_id' => $id));
		return $query->row_array();
	}

}