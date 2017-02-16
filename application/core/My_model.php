<?php

class My_Model extends CI_Model
{

	protected $table;
	protected $table_pk;

	public function __construct() {
		
		parent::__construct();
	
	}

	//FUNCTION TO GET ALL APPROVE FORM
	protected function getAllApproved() {

		$this->db->select("requests_forms.*, users.*, _t.{$this->table_pk}");
		$this->db->from('requests_forms');
		$this->db->join("{$this->table} AS _t",'_t.requests_forms_id = requests_forms.requests_forms_id');
		$this->db->join('users','users.user_id = requests_forms.resident_id');
		$this->db->where('request_status','approved');
		
		return $query= $this->db->get()->result_array();
	}

	// FUNCTION TO GET ALL PENDIN FORM
	protected function getAllPending() {

		$this->db->select("requests_forms.*, users.*, _t.{$this->table_pk}");
		$this->db->from('requests_forms');
		$this->db->join("{$this->table} AS _t",'_t.requests_forms_id = requests_forms.requests_forms_id');
		$this->db->join('users','users.user_id = requests_forms.resident_id');
		$this->db->where('request_status','pending');
		
		return $query= $this->db->get()->result_array();
	}
}