<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captainmodel extends CI_Model{

	protected $table_name = 'users';

	//***** GET ALL COUNTS  (pending, paid, reviewed, approved)

	public function getPendingCount($type = false) {

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

	
	public function getPaidCount($type = false){

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


	public function getApprovedCount($type = false){

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


	//******* GET ALL REQUEST FORMS where status(paid, approved, pending, reviewed)

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


  
	function approve_requests($requests_forms_id){

	      $this->db->set('request_status', "approved");
	      $this->db->set('date_cleared', date_create_immutable(null)->format('Y-m-d H:i:s'));
	      $this->db->where('requests_forms_id', $requests_forms_id);
	      $this->db->update('requests_forms');

         
	}

	function disapprove_requests($requests_forms_id){

	      $this->db->set('request_status', "disapproved");
	      $this->db->set('date_cleared', date_create_immutable(null)->format('Y-m-d H:i:s'));
	      $this->db->where('requests_forms_id', $requests_forms_id);
	      $this->db->update('requests_forms');

         
	 }
	 
	function get_brgy_form_by_id($brgy_form_id){

		$this->db->select('*');
		$this->db->from('barangay_clearance');
		$this->db->join('users', 'users.user_id = barangay_clearance.resident_id');
		$this->db->join('requests_forms', 'requests_forms.requests_forms_id = barangay_clearance.brgy_clearance_id');
        $this->db->where('barangay_clearance.brgy_clearance_id', $brgy_form_id);

		return $this->db->get()->row_array();

         
	}

	public function get_businessline_by_id($brgy_form_id){
		
			return $this->db->get_where('barangay_clearance_businessline',array('brgy_clearance_id'=>$brgy_form_id))->result();

	}

	//function to set form_status to cleared
	public function approve_request($requests_forms_id){

              $this->db->set('request_status', "approved");
               $this->db->set('date_cleared', date_create_immutable(null)->format('Y-m-d H:i:s'));
              $this->db->where('requests_forms_id', $requests_forms_id);
              $this->db->update('requests_forms');

	}
	public function approve($id)
	{
		$this->Captainmodel->approve_requests($id);
	
		redirect('Captaincontroller');
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

	public function getSpecificDataForFormBRGY($id,$formid){

			$this->db->select("*");
			$this->db->from("requests_forms as r");
			$this->db->join("form_types as f",'f.form_types_id = r.forms_id','left');
			$this->db->join("users as u",'u.user_id = r.resident_id','left');
			$this->db->join('barangay_clearance as b','b.requests_forms_id = r.requests_forms_id','left');
			$this->db->where('r.requests_forms_id',$id);
			$this->db->where('r.forms_id',$formid);

			return $this->db->get()->row_array();
	}
	public function get_users(){

			$this->db->select("*");
			$this->db->from("users");
			$this->db->where('user_type != ', 'resident' );
			

			return $this->db->get()->result();
			
	}

	public function get_userslist(){

			$this->db->select("*");
			$this->db->from("users");
			$this->db->where('user_type', 'resident' );
			

			return $this->db->get()->result();
			
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