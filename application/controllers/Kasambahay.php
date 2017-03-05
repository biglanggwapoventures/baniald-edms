<?php

class Kasambahay extends My_FormsController
{
	protected $view_file = 'kasambahayform';
	protected $preview_form_file = 'kasambahay_view';
	protected $header = 'Kasambahay Form';
	protected $table = 'kasambahay';
	protected $form_id = 5;

	protected $rules = [		
		'employment_arrangement' 	=> 'required|trim',
		'name_of_employer' 			=> 'required|trim',
		'employers_home_address'    => 'required|trim',
		'employers_sitio'			=> 'required|trim',
		'employers_barangay'		=> 'required|trim',
		'employers_municipality'	=> 'required|trim',
		'employers_province'		=> 'required|trim',
		'incase_of_emergency'		=> 'required|trim',
		'emergency_contact_no'		=> 'required|trim|integer',
		'monthly_salary'			=> 'required|trim|integer'	 			
	];

	protected $fillable = [
		'nature_of_work',
		'other'
	];

	public function __construct()
	{
		parent::__construct();
	}

	

}