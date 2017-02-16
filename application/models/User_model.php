<?php

class User_model extends CI_Model
{
	protected $table = 'users';

	public function create($data){

		return $this->db->insert($this->table, $data) ? $this->db->insert_id() : null;
	}

	public function is_first_user(){

		$result = $this->db->select('count(user_id) AS num')->from($this->table)->get()->row_array();
		return !(int)$result['num'];
	}
	
	public function update_government($data){
		
		$this->db->replace('government', $data);
	}

}