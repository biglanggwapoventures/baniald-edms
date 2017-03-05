<?php

class Financialpwd extends My_FormsController
{
	protected $view_file = 'financialassistanceform';
	protected $preview_form_file = 'financialassistance_view';
	protected $header = 'Request for Financial Assistance Person With Disabilities';
	protected $table = 'pwd_financial';
	protected $form_id = 9;


	protected $rules = [

		'pwd_id_card_no' => 'required|trim|integer',
		// 'issued_at'		 => 'required|trim'
		
	];

	protected $fillable = [

		'affiliated_org'

	];

	public function __construct()
	{
		parent::__construct();

		// $this->joins[$this->table] = [
		// 	[
		// 		'table' => 'family_composition',
		// 		'alias' => 'fc',
		// 		'on' => 'fc.user_id = rq.resident_id'
		// 	]
		// ];
	}

	
	
}