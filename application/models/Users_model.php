<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login($email, $password){
			$query = $this->db->get_where('users', array('username'=>$email, 'password'=>$password));
			return $query->row_array();
		}
		public function userlogin($emails, $passwords){
			$query = $this->db->get_where('users', array('username'=>$emails, 'password'=>$passwords));
			return $query->row_array();
		}
	}
?>