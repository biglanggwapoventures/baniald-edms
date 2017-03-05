<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soloparentcontroller extends CI_Controller {

 protected $user_id;

	public function __construct(){

        parent::__construct();

		$this->load->model('Register/register_model', 'user');
		$this->load->model('Resident/Resident_model');
		
		if($this->session->userdata('logged_in')){

			$this->user_id = $this->session->userdata('logged_in')['user_id'];

		} 
		//* If not logged in redirect to login controller
		else{
			redirect('logincontroller', 'refresh');
		}
	}

	public function Soloparent_Form(){

		$header_data['page_name'] = 'Solo Parent';
		
		$this->load->library('form_validation');

 			$this->form_validation->set_rules('classification_desc', 'Classifiaction of Solo Parent', 'required|trim');
 			$this->form_validation->set_rules('needs_problems', 'Needs/Problems of Solo Parent', 'required|trim');
 			$this->form_validation->set_rules('family_resources', 'Family Resources', 'required|trim');

	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', $header_data);
	    $this->load->view('Resident/nav_view', $data);
	    $this->load->view('Resident/soloparentform', ['data' => $data]);
	    $this->load->view('Footer/resident_footer');
	}

	public function insert_Solo(){
		//**** The individual page
		$solo_parent_data['solo_parent_id']  	=  '';
		$solo_parent_data['resident_id']  		=  $this->session->userdata('logged_in')['user_id'] ;
		$solo_parent_data['resident_name']  	=  $this->input->post('resident_name');
		$solo_parent_data['age']  				=  $this->input->post('age');
		$solo_parent_data['sex']  				=  $this->input->post('sex');		
		$solo_parent_data['dateofbirth']  		=  $this->input->post('dateofbirth');
		$solo_parent_data['placeofbirth']	  	=  $this->input->post('placeofbirth');
		$solo_parent_data['home_address']  		=  $this->input->post('home_address');
		$solo_parent_data['educational_attainment']  	=  $this->input->post('educational_attainment');
		$solo_parent_data['occupation']  		=  $this->input->post('occupation');
		$solo_parent_data['monthly_income']  	=  $this->input->post('monthly_income');
		$solo_parent_data['family_name']  		=  $this->input->post('family_name');
		$solo_parent_data['relationship']  		=  $this->input->post('relationship');
		$solo_parent_data['family_age']  		=  $this->input->post('family_age');
		$solo_parent_data['family_status']  	=  $this->input->post('family_status');
	//family educational attainment	$solo_parent_data['family_status']  	=  $this->input->post('family_status');
	//child birthday	$solo_parent_data['family_status']  	=  $this->input->post('family_status');
		$solo_parent_data['family_occupation']  	=  $this->input->post('family_occupation');
		$solo_parent_data['classification_desc']  	=  $this->input->post('classification_desc');
		$solo_parent_data['needs_problems']  	=  $this->input->post('needs_problems');
		$solo_parent_data['family_resources']  	=  $this->input->post('family_resources');
	


	}
	public function view_Solo(){

		$header_data['page_name'] = 'SoloParentView';
 			
		$data = $this->user->find($this->user_id);	
		$this->load->view('resident/header', $header_data);
		$this->load->view('resident/nav', 	$data);
		//**** The individual page
		$solo_parent_data['resident_name']  		=  $this->input->post('resident_name');
		$solo_parent_data['age']  				=  $this->input->post('age');
		$solo_parent_data['sex']  				=  $this->input->post('sex');		
		$solo_parent_data['dateofbirth']  		=  $this->input->post('dateofbirth');
		$solo_parent_data['placeofbirth']	  	=  $this->input->post('placeofbirth');
		$solo_parent_data['home_address']  		=  $this->input->post('home_address');
		$solo_parent_data['educational_attainment']  	=  $this->input->post('educational_attainment');
		$solo_parent_data['occupation']  		=  $this->input->post('occupation');
		$solo_parent_data['monthly_income']  	=  $this->input->post('monthly_income');
		$solo_parent_data['family_name']  		=  $this->input->post('family_name');
		$solo_parent_data['relationship']  		=  $this->input->post('relationship');
		$solo_parent_data['family_age']  		=  $this->input->post('family_age');
		$solo_parent_data['family_status']  	=  $this->input->post('family_status');
	//family educational attainment	$solo_parent_data['family_status']  	=  $this->input->post('family_status');
	//child birthday	$solo_parent_data['family_status']  	=  $this->input->post('family_status');
		$solo_parent_data['family_occupation']  	=  $this->input->post('family_occupation');
		$solo_parent_data['classification_desc']  	=  $this->input->post('classification_desc');
		$solo_parent_data['needs_problems']  	=  $this->input->post('needs_problems');
		$solo_parent_data['family_resources']  	=  $this->input->post('family_resources');

		$this->load->view('resident/soloparentview', $solo_parent_data);
		//**** END
		$this->load->view('resident/footer');
	

	}
	
}