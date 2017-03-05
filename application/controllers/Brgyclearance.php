<?php

class Brgyclearance extends My_FormsController {

	protected $view_file 		 = 'brgyclearanceform';
	protected $preview_form_file = 'brgyclearance_view';
	protected $header            = 'Request For Business Clearance';
	protected $table             = 'barangay_clearance';
	protected $form_id           = 1;

	//VALIDATION  
	protected $rules = [

		'businessname' 	  => 'required|trim',
		'businessaddress' => 'required|trim',
		'capitalinvested' => 'required|trim',
		// 'amount'   	  => 'required|trim',
		'business_line[]' => 'required|trim'

	];

	public function __construct(){
		
		parent::__construct();

	}

	public function store()	{

		if($this->run_rules()){

			$rqData = [
				'resident_id' => $this->user_id,
				'forms_id' => $this->form_id,
				'request_status' => 'pending'
			];

			$data =  $this->extract_input('-');
			$data['business_line'] = json_encode($this->input->post('business_line'));

			unset($data['business_line[]']);

			// die(json_encode($data));
			
			$id = $this->resident->insert($this->table, $rqData, $data);

			$this->json_response([
				'result' => true,
				'data' => $id
			]);
		}

		else{

			$this->json_error_array();
		
		}
	}
}