<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treasurermodel extends CI_Model{



	public function getReviewedCount($type = false)
	{
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

	function get_approved_forms(){

//          $this->db->where('request_status', "approved");

// //         $this->db->where_in('request_status', array("pending", 'approve', 'paid'));

// 	     $query= $this->db->get('requests_forms');

	     $this->db->select('*');
	     $this->db->from('requests_forms');
	     $this->db->join('users','users.user_id = requests_forms.resident_id','left');
	     $this->db->where('request_status','approved');
	     $this->db->or_where('request_status','paid');

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

		function get_reviewed_forms($id = false){



	     $this->db->select('requests_forms.*, users.*, form_types.form_type');
	     $this->db->from('requests_forms');
	     $this->db->join('users','users.user_id = requests_forms.resident_id','left');
	     $this->db->join('form_types','form_types.form_types_id = requests_forms.forms_id');
	      if($id){
	     	 $this->db->where('form_types.form_types_id', $id);
	     }
	     $this->db->where('request_status','reviewed');
	     // $this->db->or_where('request_status','paid');

         return $this->db->get()->result();
         
	}


	
	function approve_requests($requests_forms_id){
		
        //* $this->db->where('request_status', "pending");

		//*         $this->db->where_in('request_status', array("pending", 'approve', 'paid'));


              $this->db->set('request_status ', "approved");
              $this->db->where('requests_forms_id', $requests_forms_id);
              $this->db->update('requests_forms');

         
	}

	function update_status_paid($requests_forms_id){
		
        //* $this->db->where('request_status', "pending");

		//*         $this->db->where_in('request_status', array("pending", 'approve', 'paid'));


              $this->db->set('request_status ', "paid");
              $this->db->set('date_cleared',  Date('Y-m-d').' '.Date('H:i:s'));
              $this->db->where('requests_forms_id', $requests_forms_id);
              $this->db->update('requests_forms');

         
	}
	function get_brgy_form_by_id($brgy_form_id){

		$this->db->select('*');
		$this->db->from('barangay_clearance');// I use aliasing make joins easier
		$this->db->join('users', 'users.user_id = barangay_clearance.resident_id');
		$this->db->join('requests_forms', 'requests_forms.forms_id = barangay_clearance.brgy_clearance_id');
		$this->db->join('barangay_clearance_businessline as brgy','brgy.brgy_clearance_id = barangay_clearance.brgy_clearance_id','left');
        $this->db->where('barangay_clearance.brgy_clearance_id', $brgy_form_id);
//         $this->db->join('brgy_clearance_id', $brgy_form_id);

//         $this->db->where_in('request_status', array("pending", 'approve', 'paid'));

		return $this->db->get()->row_array();

         
	}

	public function get_businessline_by_id($brgy_form_id){
		
			return $this->db->get_where('barangay_clearance_businessline',array('brgy_clearance_id'=>$brgy_form_id))->result();

	
	}

}