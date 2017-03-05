<?php

class Solo_parent extends My_FormsController
{
	protected $view_file = 'soloparentform';
	protected $preview_form_file = 'soloparent_view';
	protected $header = 'Solo Parent Form';
	protected $table = 'solo_parent';
	protected $form_id = 7;	


	protected $rules = [

		'total_family_income' => 'required|trim|integer',
		
		'classifcation_desc' => 'required|trim',
		'needs_problems' => 'required|trim',
		'family_resources' => 'required|trim'
			
		
	];

	public function __construct()
	{
		parent::__construct();
	}
	// public function store()
	// {
	// 	if($this->run_rules()){
			
	// 		// $familyFields = ['childdob', 'monthly_salary'];
	// 		$rqData = [
	// 			'resident_id' => $this->user_id,
	// 			'forms_id' => $this->form_id,
	// 			'request_status' => 'pending'
	// 		];

	// 		$data = elements(array_diff(array_keys($this->rules), $familyFields), $this->input->post());
				
	// 		// $familyData = elements($familyFields, $this->input->post()) + ['user_id' => $this->user_id ];	
		
	// 		// unset($data[''], $data['philhealth_no'] );

			
	// 		// $this->resident->family_insert($familyData);

	// 		$this->resident->insert($this->table, $rqData, $data);
			
	// 		$this->json_response(['result' => true]);


	// 	}else{
	// 		$this->json_error_array();
	// 	}
	// }
	
}