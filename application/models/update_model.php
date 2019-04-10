<?php
class update_model extends CI_Model{
// Function To Fetch All Students Record
function show_products(){
$query = $this->db->get('product');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_product_id($data){
$this->db->select('*');
$this->db->from('product');
$this->db->where('product_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected Student
function update_product_id1($id,$data){
$this->db->where('product_id', $id);
$this->db->update('product', $data);
}
}
?>

