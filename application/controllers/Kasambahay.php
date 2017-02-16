<?php

class Kasambahay extends My_FormsController
{
	protected $view_file = 'kasambahayform';
	protected $preview_form_file = 'kasambahay_view';
	protected $header = 'Kasambahay Form';
	protected $table = 'kasambahay';
	protected $form_id = 5;


	protected $rules = [

		'nature_of_work' 			=> 'required|trim',
		'employment_arrangement' 	=> 'required|trim',
		'name_of_employer' 			=> 'required|trim',
		'employers_home_address'    => 'required|trim',
		'employers_sitio'			=> 'required|trim',
		'employers_barangay'		=> 'required|trim',
		'employers_municipality'	=> 'required|trim',
		'employers_province'		=> 'required|trim',
		// 'name_of_spouse'			=> 'required|trim',
		'incase_of_emergency'		=> 'required|trim',
		'emergency_contact_no'		=> 'required|trim|integer',
		'monthly_salary'			=> 'required|trim|integer'
	 
			
	];


	public function __construct()
	{
		parent::__construct();

		
	}

	// public function store() {

	// 	if($this->run_rules()){
	// 		// $governmentFields = ['id_ref_no', 'sss_no', 'gsis_no', 'pag_ibig_no', 'philhealth_status', 'philhealth_no'];
	// 		// $familyFields = ['name_of_spouse','guardians_name', 'fathers_name', 'fathers_address' ,'mothers_name', 'mothers_address', 'emergency_contact_person', 'emergency_contact_no'];
	// 		$rqData = [
	// 			'resident_id' => $this->user_id,
	// 			'forms_id' => $this->form_id,
	// 			'request_status' => 'pending'
	// 		];

	// 		$data = elements(array_diff(array_keys($this->rules), $familyFields ), $this->input->post());
	// 		// $governmentData = elements($governmentFields, $this->input->post()) + ['resident_id' => $this->user_id ];	
	// 		// $familyData = elements($familyFields, $this->input->post()) + ['user_id' => $this->user_id ];	
		
	// 		// unset($data[''], $data['philhealth_no'] );

	// 		// $data['government_id'] = $this->resident->government_insert($governmentData);
	// 		// $this->resident->family_insert($familyData);

	// 		$id = $this->resident->insert($this->table, $rqData, $data);
			
	// 		$this->json_response(['result' => true, 'data' => $id]);


	// 	}else{
	// 		$this->json_error_array();
	// 	}
	// }
}