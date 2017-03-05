<?php

class Secretary_listing extends My_SecretaryFormsListController {

	protected $view_file = 'view_pending_request';
	protected $header 	 = 'List of Pending Requests';
	protected $form_id;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Secretary/Secretarymodel', 'sec');
		// $this->form_id = $this->input->get('form_id');
	}
	public function listofallRequests()
	{

		$data['form_types_id'] = $this->input->get('form_types_id');
		$data['date_start'] = $this->input->get('date_start');
		$data['date_end'] = $this->input->get('date_end');


		$data['items'] 	= $this->sec->get_all_request_forms($data['form_types_id'], $data['date_start'], $data['date_end']);
	  	$data['title'] = 'ALL';

		$header_data['page_name'] = 'List of All Requests as of' .' '. date_create(null)->format('F d, Y');

		$this->load->view('Header/mainheader', $header_data);
		$this->load->view('secretary/listofallrequest', $data);
		$this->load->view('Footer/secretary_footer');
	}


	public function reviewed($id, $formid){

		$this->sec->review_requests($id);
		redirect("secretary_listing?form_id={$formid}");

	}

	public function cancel($id, $formid){

		$this->sec->cancel_request($id);
		redirect("secretary_listing?form_id={$formid}");

	}
	public function send_sms()
	{
		$this->load->helper(['string', 'sms']);

		$response= [];

		$this->output->set_content_type('json');

		$id = $this->input->post('request_form_id');
		$resident = $this->sec->getResidentByRequestFormId($id);

		// $this->output->set_output(json_encode($resident));return;

		if($resident &&  $resident['cellphone_no'] && !$resident['sms_code']){

			$code = random_string('alnum', 5);
			// die($code);
			$message = "Hi {$resident['firstname']} {$resident['lastname']}! You can now process your {$resident['form_type']} request at the Barangay. Please look for the secretary for further instructions. Please verify the code to the treasurer before payment. Here is your code: {$code}";
			$result = send_sms($resident['cellphone_no'], $message);

			if($result['status'] == '200 ACCEPTED'){
				$this->sec->setRequestFormSMSCode($id, $code);
				$response = [ 'status' => true, 'message' => 'Message sent!' ];
			}else{
				$response = [ 'status' => false, 'message' => 'Failed to send sms due to an API error! Please contact devs' ];
			}

		}else{
			$response = ['status' => false, 'message' => 'An sms message has already been sent to this resident!'];
		}

		$this->output->set_output(json_encode($response));

	}

	public function review()
	{
		$this->load->helper('sms');

		// $this->load->model('Secretary/Secretarymodel');
		
		$id = $this->input->post('user');
		$formid = $this->input->post('form_id');

		// $query = $this->Secretarymodel->getInformationForSMS($id);


		// echo "<pre>";
		// print_r($query);
	
	
		send_sms($this->input->post('number'), "Hi can now process your request at the Barangay, Please look for the secretary. You verificiation code is 12345" );

	
		$this->sec->review_requests($id);
	
		redirect("secretary_listing?form_id={$formid}");
	}

}