<?php

class Kalipi extends My_FormsController
{
	protected $view_file = 'kalipiform';
	protected $preview_form_file = 'kalipi_view';
	protected $header = 'Requesr for Kalipi Federation Form';
	protected $table = 'kalipi_federation';
	protected $form_id = 3;


	protected $rules = [
		'name_of_company' => 'required|trim',
		'company_address' => 'required|trim',
		'telephone_no_res' => 'required|trim|integer',
		'telephone_no_off' => 'required|trim|integer',
		'name_of_spouse' => 'required|trim',
		'spouse_age' => 'required|trim',
		'address_of_spouse' => 'required|trim',
		'dateofbirth_of_spouse' => 'required|trim',
		'highest_educational_attainment' => 'required|trim',
		'occupation_of_spouse' => 'required|trim',
		'num_of_children' => 'required|trim|integer'
		
	];

	public function __construct()
	{
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
			$data['seminars_attended'] = json_encode($this->input->post('seminars_attended'));
			unset($data['seminars_attended[]']);

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