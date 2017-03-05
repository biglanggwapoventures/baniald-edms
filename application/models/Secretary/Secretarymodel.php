
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretarymodel extends CI_Model{

	protected $table_name = 'users';
		
	protected $tables = [
		1	=> 'barangay_clearance', 
        2	=> 'senior_citizen ', 
        3	=> 'kalipi_federation',  
        4	=> 'amicable_settlement',
        5	=> 'kasambahay', 
        6	=> 'erpat', 
        7	=> 'solo_parent' , 
        8	=> 'pwd_registry' , 
        9	=> 'pwd_financial' , 
       10	=> 'complaint_form'
	];	
	

	public function getForm($form_type_id, $requests_forms_id) {


		return $this->db->select('form.*, u.*, rq.amount AS amount, rq.or_number AS or_number')
			->from('requests_forms as rq')
			->join($this->tables[$form_type_id].' AS form', 'rq.requests_forms_id = form.requests_forms_id')
			->join('users AS u', 'u.user_id =  rq.resident_id')
			->where('rq.requests_forms_id', $requests_forms_id)
			->get()
			->row_array();
	}


	// get lists request form where status is pending 
	function get_pending_request_forms($id = false){

        $this->db->select('requests_forms.*, users.*, form_types.form_type');
	    $this->db->from('requests_forms');
	    $this->db->join('users','users.user_id = requests_forms.resident_id','left');
	    $this->db->join('form_types','form_types.form_types_id = requests_forms.forms_id');

	    if($id){

	     	$this->db->where('form_types.form_types_id', $id);
	    }

	    	$this->db->where('request_status','pending');
         	return $this->db->get()->result();    
	}
	// get lists request form where status is pending 
	function get_all_request_forms($form_types_id = false, $date_start = false, $date_end = false){

        $this->db->select('requests_forms.*, users.*, form_types.form_type');
	    $this->db->from('requests_forms');
	    $this->db->join('users','users.user_id = requests_forms.resident_id','left');
	    $this->db->join('form_types','form_types.form_types_id = requests_forms.forms_id');

	    if($form_types_id){

	     	$this->db->where('form_types.form_types_id', $form_types_id);
	    }

	    if($date_start){

	    	$this->db->where('DATE(requests_forms.requests_created) >= ', $date_start);
	    }

	    if($date_end){

	    	$this->db->where('DATE(requests_forms.requests_created) <=', $date_end);
	    }

         	return $this->db->get()->result();    
	}

	// get list of approved forms where status is approved and already approved by the captain
	function get_approved_forms($id = false){

	    $this->db->select('requests_forms.*, users.*, barangay_clearance.brgy_clearance_id');
	    $this->db->from('requests_forms');
 	    $this->db->join('barangay_clearance','barangay_clearance.requests_forms_id = requests_forms.requests_forms_id','left');
	    $this->db->join('users','users.user_id = requests_forms.resident_id','left');


	   if($id){

	     	$this->db->where('requests_forms.forms_id', $id);
	    }
	    	$this->db->where('request_status','approved');	
	
			return $this->db->get()->result();    
	}

	// get list of paid form request already paid to treasurer
	function get_paid_form($form_type_id = false){

	    $this->db->select('*');
	    $this->db->from('requests_forms');
	    if($form_type_id){
	    		$this->db->where('forms_id',$form_type_id);
	    }
	    $this->db->join('users','users.user_id = requests_forms.resident_id','left');
	    $this->db->where('request_status','paid');

        return $this->db->get()->result();
         
	}
		// get list of reviewed form request already paid to treasurer
	function get_reviewed_form($form_type_id = false){

	    $this->db->select('*');
	    $this->db->from('requests_forms');
	    if($form_type_id){
	    		$this->db->where('forms_id',$form_type_id);
	    }
	    $this->db->join('users','users.user_id = requests_forms.resident_id','left');
	    $this->db->where('request_status','reviewed');

        return $this->db->get()->result();
         
	}


	// get number of pending forms count navigation 
	public function getPendingCount($type = false)
	{
		if($type){
			$this->db->where('requests_forms_type', $type);
		}

		$result = $this->db->select('COUNT(requests_forms_id) AS count, forms_id as type')
				->from('requests_forms')
				->where('request_status', 'pending')
				->group_by('forms_id')
				->get()
				->result_array();

		$data = array_column($result, 'count', 'type');
		return $type ? $data[$type] : $data;
	}

	public function getReviewedCount($type = false){
		
		if($type){
			$this->db->where('requests_forms_type', $type);
		}

		$result = $this->db->select('COUNT(requests_forms_id) AS count, forms_id as type')
				->from('requests_forms')
				->where('request_status', 'reviewed')
				->group_by('forms_id')
				->get()
				->result_array();

		$data = array_column($result, 'count', 'type');
		return $type ? $data[$type] : $data;
	}
	
	public function getPaid_count($type = false)
	{
		if($type){
			$this->db->where('requests_forms_type', $type);
		}

		$result = $this->db->select('COUNT(requests_forms_id) AS count, forms_id as type')
				->from('requests_forms')
				->where('request_status', 'paid')
				->group_by('forms_id')
				->get()
				->result_array();

		$data = array_column($result, 'count', 'type');
		return $type ? $data[$type] : $data;
	}

	public function getApproved_count($type = false)
	{
		if($type){
			$this->db->where('requests_forms_type', $type);
		}

		$result = $this->db->select('COUNT(requests_forms_id) AS count, forms_id as type')
				->from('requests_forms')
				->where('request_status', 'approved')
				->group_by('forms_id')
				->get()
				->result_array();

		$data = array_column($result, 'count', 'type');
		return $type ? $data[$type] : $data;
	}


	function get_cancelled_forms(){

	 	$this->db->select('*');
		$this->db->from('requests_forms');
		$this->db->join('users','users.user_id = requests_forms.resident_id','left');
	 	$this->db->where('request_status', "cancelled");

		$query= $this->db->get();
 		return $query->result();
	}
	

	// function for setting the status to reviewed
	function review_requests($requests_forms_id){

        $this->db->set([
        	'request_status' => "reviewed", 
        	'reviewed_by' => $this->session->userdata('logged_in')['user_id'],
        	'date_reviewed' => date_create_immutable(null)->format('Y-m-d H:i:s')

    	]);
        $this->db->join('pwd_registry AS pr', 'pr.requests_forms_id = rq.requests_forms_id');
        $this->db->where('requests_forms_id', $requests_forms_id);
        $this->db->update('requests_forms AS rq');    
	}
	
	// function for setting the status to approved request u
	function approve_requests($requests_forms_id){

	    $this->db->set('request_status', "approved");
	    $this->db->where('requests_forms_id', $requests_forms_id);
	    $this->db->update('requests_forms'); 
	}
	
	function cancel_request($requests_forms_id){
	
		$this->db->set('request_status', "cancelled");
		$this->db->where('requests_forms_id', $requests_forms_id);
	 	$this->db->update('requests_forms');

	}

	// function for getting brgy clearance form by it brgy form id
	// join the user id and brgy clearance id, and also joining brgy clearance business line to brgy clearance
	function get_brgy_form_by_id($requests_forms_id){

		$this->db->select("*");
		$this->db->from('requests_forms as r');
		$this->db->join('barangay_clearance as b', 'b.requests_forms_id = r.requests_forms_id','left');
		$this->db->join('users as u','u.user_id = r.resident_id','left');
		$this->db->where('r.requests_forms_id',$requests_forms_id);
		$this->db->where('u.user_type','resident');

		return $this->db->get()->row_array();

	}

	// get business line by id where  brgy business line id = brgy form id 
	public function get_businessline_by_id($brgy_form_id){
	
		return $this->db->get_where('barangay_clearance_businessline',array('brgy_clearance_id'=>$brgy_form_id))->result();
	
	}

	public function sendFeedback($data) {
		

		$this->db->set('request_status', "cancelled");

		$this->db->where('requests_forms_id', $data['requests_forms_id']);
	 	$this->db->update('requests_forms');

		return $this->db->insert('feedback', $data) ? $this->db->insert_id() : null;
	}

	public function getSpecificDataForFormPWD($id,$formid){

		$this->db->select("*");
		$this->db->from("requests_forms as r");
		$this->db->join("form_types as f",'f.form_types_id = r.forms_id','left');
		$this->db->join('pwd_registry as p','p.requests_forms_id = r.requests_forms_id','left');
		$this->db->join("users as u",'u.user_id = r.resident_id','left');
		$this->db->join('government as g','g.resident_id = u.user_id','left');
		$this->db->join('family_composition as fam','fam.user_id = u.user_id','left');
		$this->db->where('r.requests_forms_id',$id);
		$this->db->where('r.forms_id',$formid);

		return $this->db->get()->row_array();

	}

	public function getSpecificDataForFormBRGY($id,$formid) {

		$this->db->select("*");
		$this->db->from("requests_forms as r");
		$this->db->join("form_types as f",'f.form_types_id = r.forms_id','left');
		$this->db->join("users as u",'u.user_id = r.resident_id','left');
		$this->db->join('barangay_clearance as b','b.requests_forms_id = r.requests_forms_id','left');
		$this->db->where('r.requests_forms_id',$id);
		$this->db->where('r.forms_id',$formid);

		return $this->db->get()->row_array();
	}

	public function getInformationForSMS($id){


		return $this->db->get_where('users',['user_id'=>$id,'user_type'=> 'resident'])->row_array();
	}


	///////////////////////////////////////////////////


	public function getResidentByRequestFormId($requestFormId)
	 {
	 	return $this->db->select('sms_code, firstname, lastname, cellphone_no, form_type')
	 		->from('requests_forms AS rf')
 			->join('users AS u', 'u.user_id = rf.resident_id')
 			->join('form_types as ft', 'ft.form_types_id = rf.forms_id')
 			->where('rf.requests_forms_id', $requestFormId)
 			->get()
 			->row_array() ?: false;

	 } 
	 public function setRequestFormSMSCode($id, $code)
	 {
	 	return $this->db->update('requests_forms', ['sms_code' => $code], ['requests_forms_id' => $id]);
	 }
	 	public function updateAdmin($data){
		
			$user_id = $this->session->userdata('logged_in')['user_id'];

			// $this->db->where('user_type !=', 'resident');
			// $this->db->update($this->table_name, $data, ['user_id' => $user_id]);
			$this->db->where('user_id', $user_id);
			// $this->db->from($this->table_name);
			$this->db->set($data);
			$this->db->update($this->table_name);

			// $this->db->update('users', $data, ['user_type' => 'captain']);
	}
	

}