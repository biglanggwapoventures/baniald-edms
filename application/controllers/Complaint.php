<?php

class Complaint extends My_FormsController
{
	protected $view_file = 'complaintform';
	protected $preview_form_file = 'complaint_view';
	protected $header = 'Request for Complaint Form';
	protected $table = 'complaint_form';
	protected $form_id = 10;


	protected $rules = [
		'complainant_name' => 'required|trim',
		'respondent_name' => 'required|trim',
		'complaint_desc' => 'required|trim'		
	
	];

	public function __construct()
	{
		parent::__construct();
	}
	
}