<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalipicontroller extends CI_Controller {

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

	public function Kalipi_Form(){

		$header_data['page_name'] = 'Kalipi Federation';

		$this->load->library('form_validation');

 		$this->form_validation->set_rules('name_of_company', 'Name of Company', 'required|trim');
 		$this->form_validation->set_rules('company_address', 'Business Address', 'required|trim');
 		$this->form_validation->set_rules('telephone_no_res', 'Telephone No. (Res)', 'required|trim');
 		$this->form_validation->set_rules('telephone_no_off', 'Telephone No. (Off)', 'required|trim');
 		$this->form_validation->set_rules('name_of_spouse', 'Name of Spouse ', 'required|trim');
 		$this->form_validation->set_rules('address_of_spouse', 'Address of Spouse', 'required|trim');
 		$this->form_validation->set_rules('dateofbirth_of_spouse', 'Date of Birth (Spouse)', 'required|trim');
 		$this->form_validation->set_rules('highest_educational_attainment', 'Highest Educational Attainment', 'required|trim');
 		$this->form_validation->set_rules('occupation_of_spouse', 'Occupation of Spouse', 'required|trim');
 		$this->form_validation->set_rules('no_of_children', 'No. of Children', 'required|trim');
 		$this->form_validation->set_rules('seminar_description1', 'Seminar 1', 'required|trim'); 			 		
 		$this->form_validation->set_rules('seminar_description2', 'Seminar 2', 'required|trim');
 		$this->form_validation->set_rules('seminar_description3', 'Seminar 3', 'required|trim');
 		$this->form_validation->set_rules('seminar_description4', 'Seminar 4', 'required|trim');
 		$this->form_validation->set_rules('seminar_description5', 'Seminar 5', 'required|trim');
 		$this->form_validation->set_rules('description1_date', 'Seminar 1 Date', 'required|trim');
 		$this->form_validation->set_rules('description2_date', 'Seminar 2 Date', 'required|trim');
 		$this->form_validation->set_rules('description3_date', 'Seminar 3 Date', 'required|trim');
 		$this->form_validation->set_rules('description4_date', 'Seminar 4 Date', 'required|trim');
 		$this->form_validation->set_rules('description5_date', 'Seminar 5 Date', 'required|trim');

		
	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', $header_data);
	    $this->load->view('Resident/nav_view', $data);
	    $this->load->view('Resident/Kalipiform',['data' => $data]);
	    $this->load->view('Footer/resident_footer');
	}

	public function insert_KalipiForm(){
		$kalipi_data['resident_name']  		=  $this->input->post('resident_name');
		$kalipi_data['home_address']  		=  $this->input->post('home_address');
		$kalipi_data['prov_address']  		=  $this->input->post('prov_address');
		$kalipi_data['dateofbirth']  		=  $this->input->post('dateofbirth');
		$kalipi_data['age']  				=  $this->input->post('age');
		$kalipi_data['sex']  				=  $this->input->post('sex');
		$kalipi_data['civil_status']  		=  $this->input->post('civil_status');
		$kalipi_data['religon']  			=  $this->input->post('religon');
		$kalipi_data['telephone_no']  		=  $this->input->post('telephone_no');
		$kalipi_data['cellphone_no']  		=  $this->input->post('cellphone_no');
		$kalipi_data['educational_attainment']  		=  $this->input->post('educational_attainment');
		$kalipi_data['occupation']  		=  $this->input->post('occupation');
		$kalipi_data['name_of_company']  	=  $this->input->post('name_of_company');
		$kalipi_data['company_address']		=  $this->input->post('company_address');
		$kalipi_data['telephone_no_res']  	=  $this->input->post('telephone_no_res');
		$kalipi_data['telephone_no_off']  	=  $this->input->post('telephone_no_off');
		$kalipi_data['skills']  			=  $this->input->post('skills');
		$kalipi_data['hobbies']  			=  $this->input->post('hobbies');
		$kalipi_data['name_of_spouse']  	=  $this->input->post('name_of_spouse');
		$kalipi_data['address_of_spouse']	=  $this->input->post('address_of_spouse');
		$kalipi_data['dateofbirth_of_spouse']  		=  $this->input->post('dateofbirth_of_spouse');
		$kalipi_data['highest_educational_attainment']  	=  $this->input->post('highest_educational_attainment');
		$kalipi_data['occupation_of_spouse']  		=  $this->input->post('occupation_of_spouse');
		$kalipi_data['no_of_children']  	=  $this->input->post('no_of_children');
		$kalipi_data['family_name']  		=  $this->input->post('family_name');
		$kalipi_data['family_age']  		=  $this->input->post('family_age');
		$kalipi_data['relationship']  		=  $this->input->post('relationship');
		$kalipi_data['family_occupation'] 	=  $this->input->post('family_occupation');
		$kalipi_data['family_name']  		=  $this->input->post('family_name');
		$kalipi_data['family_age']  		=  $this->input->post('family_age');
		$kalipi_data['relationship']  		=  $this->input->post('relationship');
		$kalipi_data['family_occupation'] 	=  $this->input->post('family_occupation');

		$kalipi_id= $this->Resident_model->insert_kalipi_data($kalipi_data);

	}
	public function view_KalipiForm(){

	$header_data['page_name'] = 'Kalipi View';
 			
	$data = $this->user->find($this->user_id);	
	$this->load->view('resident/header', $header_data);
	$this->load->view('resident/nav', $data);
	//**** The individual page
	$kalipi_data['resident_name']  		=  $this->input->post('resident_name');
	$kalipi_data['home_address']  		=  $this->input->post('home_address');
	$kalipi_data['prov_address']  		=  $this->input->post('prov_address');
	$kalipi_data['dateofbirth']  		=  $this->input->post('dateofbirth');
	$kalipi_data['age']  				=  $this->input->post('age');
	$kalipi_data['sex']  				=  $this->input->post('sex');
	$kalipi_data['civil_status']  		=  $this->input->post('civil_status');
	$kalipi_data['religon']  			=  $this->input->post('religon');
	$kalipi_data['telephone_no']  		=  $this->input->post('telephone_no');
	$kalipi_data['cellphone_no']  		=  $this->input->post('cellphone_no');
	$kalipi_data['educational_attainment']  		=  $this->input->post('educational_attainment');
	$kalipi_data['occupation']  		=  $this->input->post('occupation');
	$kalipi_data['name_of_company']  	=  $this->input->post('name_of_company');
	$kalipi_data['company_address']		=  $this->input->post('company_address');
	$kalipi_data['telephone_no_res']  	=  $this->input->post('telephone_no_res');
	$kalipi_data['telephone_no_off']  	=  $this->input->post('telephone_no_off');
	$kalipi_data['skills']  			=  $this->input->post('skills');
	$kalipi_data['hobbies']  			=  $this->input->post('hobbies');
	$kalipi_data['name_of_spouse']  	=  $this->input->post('name_of_spouse');
	$kalipi_data['address_of_spouse']	=  $this->input->post('address_of_spouse');
	$kalipi_data['dateofbirth_of_spouse']  		=  $this->input->post('dateofbirth_of_spouse');
	$kalipi_data['highest_educational_attainment']  	=  $this->input->post('highest_educational_attainment');
	$kalipi_data['occupation_of_spouse']  		=  $this->input->post('occupation_of_spouse');
	$kalipi_data['no_of_children']  	=  $this->input->post('no_of_children');
	$kalipi_data['family_name']  		=  $this->input->post('family_name');
	$kalipi_data['family_age']  		=  $this->input->post('family_age');
	$kalipi_data['relationship']  		=  $this->input->post('relationship');
	$kalipi_data['family_occupation'] 	=  $this->input->post('family_occupation');
	$kalipi_data['family_name']  		=  $this->input->post('family_name');
	$kalipi_data['family_age']  		=  $this->input->post('family_age');
	$kalipi_data['relationship']  		=  $this->input->post('relationship');
	$kalipi_data['family_occupation'] 	=  $this->input->post('family_occupation');
	
	

	$this->load->view('resident/kalipiform', $kalipi_data);
		//**** END
	$this->load->view('resident/footer');
	
}
}