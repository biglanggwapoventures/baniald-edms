<?php

class Settlement extends My_FormsController
{
	protected $view_file = 'settlementform';
	protected $preview_form_file = 'settlement_view';
	protected $header = 'Request for Amicable Sett;lement Form';
	protected $table = 'amicable_settlement';
	protected $form_id = 4;


	protected $rules = [
		'complainant_name' => 'required|trim',
		'respondent_name' => 'required|trim',
		'settlement' => 'required|trim'
			
		
	];

	public function __construct()
	{
		parent::__construct();
	}
	
}