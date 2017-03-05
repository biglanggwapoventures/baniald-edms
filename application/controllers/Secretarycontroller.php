<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Secretarycontroller extends CI_Controller {

	public function __construct()
    {
      parent::__construct();

		$this->load->model('Secretary/Secretarymodel');
		$this->load->model('Captain/Captainmodel');
      
      if(!$this->session->userdata('logged_in')){
        	redirect('login');
      }
      
    }

    //1st landing page after login of the secretary
    //this function is used to display list of pending request 
	public function index(){	
		$header_data['page_name'] = 'Pending Requests';

		$data['requests_pendings'] 	= $this->Secretarymodel->get_pending_request_forms();

		$this->load->view('Header/mainheader', $header_data);
		$this->load->view('secretary/view_pending_request', $data);
		$this->load->view('Footer/secretary_footer');
	}	
	public function updateAdminaccount(){
		
		$header_data['page_name'] = 'Update Account';
        
        $data = array(
        	'firstname'		=> $this->input->post('firstname'),
        	'lastname'		=> $this->input->post('lastname'),
        	'username'		=> $this->input->post('username'),
        	'password'		=> $this->input->post('password'),
        	'email_address'	=> $this->input->post('email_address'),
        	);

		$this->Secretarymodel->updateAdmin($data);
		


		$this->session->set_flashdata('feedback_sent', 1);
		$this->output->set_content_type('json')
			->set_output(json_encode(['result'=> true]));
	}

	//this function is for displaying the brgyclearance layout with data inputted from the resident
	//responsible for dsiplaying the brgy form data and its brgy business line
	public function brgyclearanceview($id){

		$header_data['page_name'] = 'View Business Clearance';

		$data['request_profile'] = $this->Secretarymodel->get_brgy_form_by_id($id);
		
		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('secretary/brgyclearanceview',$data);
		$this->load->view('Footer/secretary_footer');
		
	}
	
	//this function is for displaying the list of paid request forms 
	public function view_paid_request(){

		$header_data['page_name'] = 'Paid Requests';

		$data['requests_paid'] 	= $this->Secretarymodel->get_paid_form();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Secretary/view_paid_request', $data);
		$this->load->view('Footer/secretary_footer');
	}

	//this function is for displaying the list of Approved request forms 
	public function view_approved_request(){

		$header_data['page_name'] = 'Approved Requests';

		$data['requests_approved'] 	= $this->Secretarymodel->get_approved_forms();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Secretary/view_approved_request', $data);
		$this->load->view('Footer/secretary_footer');
	}

	// this function is responsible for changing to approved and calling the model for setting tits status
	public function approve($id)
	{
		$this->Secretarymodel->approve_requests($id);
	
		redirect('secretarycontroller');
	}

	public function cancel($id)
	{
		$this->Secretarymodel->cancel_request($id);
	
		redirect('secretarycontroller');
	}


	// this function is responsible for changing to reviewed  and calling the model for setting its status
	public function review($id)
	{
		$this->Secretarymodel->review_requests($id);
	
		redirect('secretarycontroller');
	}
	
	public function do_print($barangay_clearance_id)
	{
		$data['request_profile'] = $this->Captainmodel->get_brgy_form_by_id($barangay_clearance_id);
		$this->load->view('Captain/print-barangay-clearance', $data);
	}

	public function sendFeedback(){
		
		$this->load->library('form_validation');
		$this->load->helper('array');

		$this->output->set_content_type('json');

		$this->form_validation->set_rules('sent_to', 'Recipient', 'required|integer');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('requests_forms_id', 'Form ID', 'required');

		if($this->form_validation->run()){
			$input = elements(['sent_to', 'message', 'requests_forms_id'], $this->input->post());
			// die()
			$input['sent_from'] = $this->session->userdata('logged_in')['user_id'];

			$this->Secretarymodel->sendFeedback($input);

			$this->session->set_flashdata('feedback_sent', 1);
			$this->output->set_output(json_encode([
				'result' => true,
			]));

			return;
		}

		$this->output->set_output(json_encode([
			'result' => false,
			'errors' => array_values($this->form_validation->error_array())
		]));

	}
	
}

	

