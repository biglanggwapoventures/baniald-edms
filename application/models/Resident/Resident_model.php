<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resident_model extends CI_Model{

	protected $tables = [
		1	=> 'barangay_clearance', 
        2	=> 'senior_citizen', 
        3	=> 'kalipi_federation',  
        4	=> 'amicable_settlement',
        5	=> 'kasambahay', 
        6	=> 'erpat', 
        7	=> 'solo_parent', 
        8	=> 'pwd_registry' , 
        9	=> 'pwd_financial', 
        10	=> 'complaint_form'
	];	

	protected $joins = [
		'pwd_registry' => [
			
			[
				'table' => 'government',
				'alias' => 'g',
				'on' => 'g.resident_id = rq.resident_id'
			],
				
		],
		'kasambahay' => [
			// [
			// 	'table' => 'family_composition',
			// 	'alias' => 'fc',
			// 	'on' => 'fc.user_id = rq.resident_id'
			// ],
			[
				'table' => 'government',
				'alias' => 'g',
				'on' => 'g.resident_id = rq.resident_id'
			]
		],

		'senior_citizen' => [
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'on' => 'fc.user_id = rq.resident_id'
			],
			[
				'table' => 'government',
				'alias' => 'g',
				'on' => 'g.resident_id = rq.resident_id'
			],
		]
		

	];

	protected $lazyLoad = [
		'pwd_registry' => [
			
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'fk' => 'user_id',
				'comparison' => 'resident_id'
			],
				
		],
		'senior_citizen' => [
			
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'fk' => 'user_id',
				'comparison' => 'resident_id'
			],
				
		],
		'kalipi_federation' => [
			
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'fk' => 'user_id',
				'comparison' => 'resident_id'
			],
				
		],
		'erpat' => [
			
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'fk' => 'user_id',
				'comparison' => 'resident_id'
			],
				
		],
		'kasambahay' => [
			
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'fk' => 'user_id',
				'comparison' => 'resident_id'
			],
				
		],

		'solo_parent' => [
			
			[
				'table' => 'family_composition',
				'alias' => 'fc',
				'fk' => 'user_id',
				'comparison' => 'resident_id'
			],
				
		],	
	];

	public function insert($table, $rqData, $mainData) {
		
		$this->db->trans_start();
		
		$this->db->insert('requests_forms', $rqData);

		$rqId =  $this->db->insert_id();

		$mainData['requests_forms_id'] =$rqId;

		$this->db->insert($table, $mainData);

		$this->db->trans_complete();

		return $this->db->trans_status() ? $rqId : false;

	}

	public function getForm($table, $requests_forms_id) {

		// die($table);
		
		$table = is_numeric($table) ? trim($this->tables[$table]) : $table;

		// die($table);

		$this->db->select('form.*, u.*, rq.resident_id, rq.request_status, rq.amount AS amount, rq.or_number AS or_number, rq.requests_created As requests_created, rq.date_paid AS date_paid, CONCAT(r.firstname , " " , r.lastname) as reviewed_by')
			->from('requests_forms as rq')
			->join("{$table} AS form", 'rq.requests_forms_id = form.requests_forms_id')
			->join('users AS u', 'u.user_id =  rq.resident_id')
			->join('users AS r', 'r.user_id = rq.reviewed_by' ,'left');

		if(isset($this->joins[$table])){
			foreach($this->joins[$table] As $t){
				$this->db->select("{$t['alias']}.*");
				$this->db->join("{$t['table']} AS {$t['alias']}", "{$t['on']}", 'left');
			}
		}

		$result  = $this->db->where('rq.requests_forms_id', $requests_forms_id)
			->get()
			->row_array();
			

		if(isset($this->lazyLoad[$table])){
			// die(json_encode(($result)));

			foreach($this->lazyLoad[$table] AS $l){
				$result[$l['alias']] = $this->db->get_where($l['table'], [$l['fk'] => $result[$l['comparison']]])->result_array();
			}
		}

		return $result;
	}

	// insert requests form data to requests form
	function insert_requests_forms($requests_forms_data){

         $this->db->insert('requests_forms', $requests_forms_data);
         return $this->db->insert_id();
	
	}	

	// insert requests form data to brgy clearance form
	function insert_brgyclearance_data($barangay_clearance_data){

         $this->db->insert('barangay_clearance', $barangay_clearance_data);

         return true;
		
	}	
	// added left
	// get request form requests status
	function get_my_request_forms($user_id) {

		// $this->db->join('requests_forms as r', 'r.requests_forms_id = f.forms_id' )
		return $this->db->select('rf.*, ft.form_type')
			->from('requests_forms as rf')
			->join('form_types as ft', 'ft.form_types_id = rf.forms_id', 'left')
			->where('rf.resident_id', $user_id)
			->where_in('rf.request_status', array("pending", 'reviewed', 'paid', 'cancelled'))
			->get()
			->result();
	}

	//get request history status is cleared
	function get_my_request_history($user_id){
	return $this->db->select('rf.*, ft.form_type')
			->from('requests_forms as rf')
			->join('form_types as ft', 'ft.form_types_id = rf.forms_id')
			->where('rf.resident_id', $user_id)
			->where_in('rf.request_status', array('approved', 'disapproved'))
			->get()
			->result();
	}

	// insert data to goverment table
	public function government_update($resident_id, $governmentData) {
		
		return $this->db->update('government', $governmentData, ['resident_id' => $resident_id]);
		
	}

	// insert data to family composition table
	public function family_insert($familyData){

		$this->db->insert('family_composition', $familyData);
		return $this->db->insert_id();
		
         
	}
	
	public function getfeedback($data){
		
		return $this->db->select("CONCAT(u.firstname, ' ', u.lastname) AS sender, f.sent_from AS sender_id, f.message, tf.form_type, f.seen_at, rf.requests_forms_id", false)
			->from('feedback AS f')
			->join('users AS u', 'u.user_id = f.sent_from')
			->join('requests_forms as rf', 'rf.requests_forms_id = f.requests_forms_id ')
			->join('form_types as tf', 'tf.form_types_id = rf.forms_id')
			->where('f.sent_to', $this->session->userdata('logged_in')['user_id'])
			->get()
			->result_array();
 	}

 	public function set_image($user, $filename){

		$this->db->set('image_filename', $filename);
		$this->db->where('user_id', $user);
		$this->db->update('users');

	}

	public function getRequest($id)
	{
		return $this->db->get_where('requests_forms', ['requests_forms_id' => $id])->row_array();
	}

	public function get_approve_blotterform()
	{
		return $this->db->select('*')
			->from('complaint_form AS cf')
			->join('requests_forms AS rf', 'rf.requests_forms_id = cf.requests_forms_id')
			->where('rf.request_status', 'approved')
			->get()
			->result_array();
	}

}