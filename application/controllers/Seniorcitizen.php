<?php

class Seniorcitizen extends My_FormsController {

	protected $view_file 		 = 'seniorcitizenform';
	protected $preview_form_file = 'senior_citizen_view';
	protected $header            = 'Request For Senior Citizen';
	protected $table             = 'senior_citizen';
	protected $form_id           = 2;

	//VALIDATION 
	protected $rules = [

		'name_of_spouse' => 'required|trim',
		'spouse_income'  => 'required|trim|integer',
		'osca_id_no' 	 =>	'required|trim|integer'
		
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
			$data['organizational_membership'] = json_encode($this->input->post('org'));
			unset($data['org[]']);

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