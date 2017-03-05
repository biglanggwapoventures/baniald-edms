<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treasurercontroller extends CI_Controller {

public function __construct()
    {
      parent::__construct();

		$this->load->model('Treasurer/Treasurermodel');
      
      if(!$this->session->userdata('logged_in')){
        	redirect('login');
      }
      
    }

    public function index()
	{	
		$header_data['page_name'] = 'Reviewed Requests';

		$data['requests_reviewed'] 	= $this->Treasurermodel->get_reviewed_forms();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Treasurer/view_reviewed_request', $data);
		$this->load->view('Footer/mainfooter');
	}	

	public function view_approve_request()
	{	
		$header_data['page_name'] = 'Approved Requests';

		$data['requests_approved'] 	= $this->Treasurermodel->get_approved_forms();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Treasurer/view_approved_request', $data);
		$this->load->view('Footer/mainfooter');

		
	}
	public function view_paid_request()
	{	
		$header_data['page_name'] = 'Reviewed Requests';

		$data['requests_paid'] 	= $this->Treasurermodel->get_paid_forms();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Treasurer/view_paid_request', $data);
		$this->load->view('Footer/mainfooter');

		
	}


	public function brgyclearanceview($id){

		// $request_brgy_id = $this->uri->segment(3);
		$header_data['page_name'] = 'FORM';

		$data['request_profile'] = $this->Treasurermodel->get_brgy_form_by_id($id);
		$data['business_line'] = $this->Treasurermodel->get_businessline_by_id($id);
		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Treasurer/brgyclearanceview',$data);
		$this->load->view('Footer/mainfooter');
		
	}

	public function payment_status($id)
	{
		$this->Treasurermodel->update_status_paid($this->uri->segment(3));
		redirect('treasurercontroller');
	}

	

}
	

