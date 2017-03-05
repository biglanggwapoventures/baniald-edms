<?php

class Treasurer_listing extends My_TreasurerFormsListController {

	protected $view_file = 'view_reviewed_request';
	protected $header = 'List of Reviewed Requests';
	protected $form_id;

	public function __construct()
	{
		parent::__construct();
		// $this->form_id = $this->input->get('form_id');
	}


	public function payment_status($id,$formid)
	{
		$this->tre->update_status_paid($id);
		redirect("treasurer_listing/?form_id={$formid}");
	}

	public function add_payment()
	{
		$this->load->model('Treasurermodel', 't');

		$this->rules = [
			'or_number' => 'required',
			'amount' => 'required|numeric',
		];

		if($this->run_rules() !== true){
			$this->json_error_array();
			return;
		}

		$data = $this->extract_input();

		$this->t->add_payment($this->input->post('requests_forms_id'), $data);

		$this->json_response([
			'result' => true
		]);
		return;

	}
}