<?php

class Erpat extends My_FormsController
{
	protected $view_file = 'erpatform';
	protected $preview_form_file = 'erpat_view';
	protected $header = 'Request for Erpat Registration Form';
	protected $table  = 'erpat';
	protected $form_id = 6;


	

	public function __construct()
	{
		parent::__construct();
	}
	
}