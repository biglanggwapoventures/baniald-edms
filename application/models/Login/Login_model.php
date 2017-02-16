<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function attempt($username, $password) {
	 	
	 	return  $this->db->select('*')->from('users')->where([
	    	
	    	'username'=> $username ,
    		'password' => $password
  		
  		])->get()->row_array();  

}


}
