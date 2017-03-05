<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	protected $table_name = 'users';

	// this function is for updating data and save to database 
	function update($user_id, $data) {

		 $this->db->update($this->table_name, $data['profile'], ['user_id'=> $user_id]);

		 $this->db->replace('government', $data['government']);

		 $this->db->delete('family_composition', ['user_id' => $user_id]);

		 if(isset($data['family'])){

		 	$this->db->insert_batch('family_composition', $data['family']);
		 }

	}

	// this funcition is for creating user insert data to database 
	function register($data) {
			
		$this->db->insert($this->table_name, $data);
			
		return true;
	}

	//this function is to find specific user by its user_id
	public function find($id) {
		
		$data = $this->db->select()
			->from("{$this->table_name} as u")
			->join('government as g' , 'g.resident_id = u.user_id', 'left')
			->where('u.user_id', $id)
			->get()->row_array();

		$data['family_composition'] = array_column($this->db->get_where('family_composition', ['user_id' => $id])->result_array(), null, 'relationship');

		return $data;

	}

	public function checkCaptain() {
		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_type', 'captain');

		$query = $this->db->get();

		if($query->num_rows() == 0){

			$data->user_type = 'captain';
			$this->db->insert('users', $data);
 		}
		else if($query->num_rows() == 1 && $data['user_type'] == 'captain'){
			
			return false;
		}
		else{

			$this->db->insert('users', $data);
		}

	}
	
}