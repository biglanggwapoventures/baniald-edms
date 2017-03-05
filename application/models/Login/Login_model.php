<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function attempt($username, $password) {
	 	
	 	return  $this->db->select('*')
	 		->from('users')
	 		->where("(username = '{$username}' OR cellphone_no = '{$username}' OR email_address = '{$username}')")
	 		->where('password', $password)
	 		->get()
	 		->row_array();  

}


}
