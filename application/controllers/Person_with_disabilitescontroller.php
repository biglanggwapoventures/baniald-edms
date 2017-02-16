	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Person_with_disabilitescontroller extends CI_Controller {

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
				redirect('login', 'refresh');
			}
		}

		public function Pwd_Form(){


		
	 			
			$this->load->library('form_validation');

			$this->form_validation->set_rules('pwd_number', 'PWD  Number', 'required|trim|integer');
			$this->form_validation->set_rules('causes_of_disability', 'Cause of Disablity', 'required|trim');
			$this->form_validation->set_rules('type_disability', 'Type of Disablity', 'required|trim');
			$this->form_validation->set_rules('telephone_no', 'Telephone Number', 'required|trim');
			$this->form_validation->set_rules('cellphone_no', 'Cellphone Number', 'required|trim');
			$this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'required|trim');
			$this->form_validation->set_rules('home_address', 'Home Address', 'required|trim');
			$this->form_validation->set_rules('email_address', 'Email Address', 'required|trim');
			$this->form_validation->set_rules('employmentstatus', 'Employment Status', 'required|trim');
			$this->form_validation->set_rules('nature_of_employment', 'Nature of Employment', 'required|trim');
			$this->form_validation->set_rules('type_of_employment', 'Type of Employment', 'required|trim');	
			$this->form_validation->set_rules('occupation', 'Occupation', 'required|trim');	
			$this->form_validation->set_rules('educatioinal_attainment', 'Educatioinal Attainment', 'required|trim');
			$this->form_validation->set_rules('id_ref_no', 'ID Ref No ', 'required|trim');	
			$this->form_validation->set_rules('sss_no', 'SSS No', 'required|trim');	
			$this->form_validation->set_rules('gsis_no', 'GSIS No', 'required|trim');	
			$this->form_validation->set_rules('pag-ibig_no', 'Pag-Ibig No', 'required|trim');
			$this->form_validation->set_rules('philhealth_status', 'Phil-health Status', 'required|trim');
			$this->form_validation->set_rules('philhealth_no', 'Phil-health No', 'required|trim');
			$this->form_validation->set_rules('blood_type', 'Blood Type', 'required|trim');
			$this->form_validation->set_rules('affilated_org', 'Affilated Organization', 'required|trim');
			$this->form_validation->set_rules('contact_person', 'Contact No', 'required|trim|integer');
			$this->form_validation->set_rules('office_address', 'Offic Addresss', 'required|trim');
			$this->form_validation->set_rules('office_telephone_no', 'Telephone No', 'required|trim');
			$this->form_validation->set_rules('accomplished_by_lastname', 'Accomplished by Last Name', 'required|trim');
			$this->form_validation->set_rules('accomplished_by_firstname', 'Accomplished by First Name', 'required|trim');	
			$this->form_validation->set_rules('name_of_reporting_unit', 'Name of Reporting Unit', 'required|trim');
			$this->form_validation->set_rules('registration_no', 'registration No', 'required|trim');
			$this->form_validation->set_rules('reporting_unit_lastname', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('reporting_unit_firstname', 'First Name', 'required|trim');
			$this->form_validation->set_rules('guardians_lastname', 'Guardian Last Name', 'required|trim');
			$this->form_validation->set_rules('guardians_firstname', 'Guardian First Name ', 'required|trim');
			$this->form_validation->set_rules('guardians_middlename', 'Middle Name', 'required|trim');
			$this->form_validation->set_rules('mothers_lastname', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('mothers_firstname', 'First Name', 'required|trim');
			$this->form_validation->set_rules('fathers_lastname', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('fathers_firstname', 'First Name', 'required|trim');
			$this->form_validation->set_rules('fathers_middlename', 'Middle Name', 'required|trim');
		


	 		if($this->form_validation->run()){

	 			$this->view_PWD();

	 		}

	 		else{
	 			
	 			$header_data['page_name'] = 'Request for Person With Disablity Registration Form';


				$data = $this->user->find($this->user_id);

				$this->load->view('Header/resident_header', $header_data);
				$this->load->view('Resident/nav_view', 	$data);
				$this->load->view('Resident/pwdform', compact('data'));
				$this->load->view('Footer/resident_footer');
				}
		
		}

		public function insert_PWD(){

			$header_data['page_name'] = 'Person With Disablity View';
	 			
			$data = $this->user->find($this->user_id);	

			$this->load->view('resident/header', $header_data);
			$this->load->view('resident/nav', 	$data);
			//**** The individual page
			$pwd_data['pwd_number']  				=  $this->input->post('pwd_number');
			$pwd_data['causes_of_disability']  		=  $this->input->post('causes_of_disability');
			$pwd_data['type_disability'] 			=  $this->input->post('type_disability');
			$pwd_data['telephone_no'] 				=  $this->input->post('telephone_no');
			$pwd_data['cellphone_no'] 				=  $this->input->post('cellphone_no');
			$pwd_data['dateofbirth'] 				=  $this->input->post('dateofbirth');
			$pwd_data['dateofbirth'] 				=  $this->input->post('dateofbirth');
			$pwd_data['home_address'] 				=  $this->input->post('home_address');
			$pwd_data['sex'] 						=  $this->input->post('sex');
			$pwd_data['email_address'] 				=  $this->input->post('email_address');
			$pwd_data['employmentstatus'] 			=  $this->input->post('employmentstatus');
			$pwd_data['nature_of_employment'] 		=  $this->input->post('nature_of_employment');
			$pwd_data['type_of_employment'] 		=  $this->input->post('type_of_employment');
			$pwd_data['occupation'] 				=  $this->input->post('occupation');
			$pwd_data['educatioinal_attainment']	=  $this->input->post('educatioinal_attainment');
			$pwd_data['id_ref_no'] 					=  $this->input->post('id_ref_no');
			$pwd_data['sss_no'] 					=  $this->input->post('sss_no');
			$pwd_data['gsis_no'] 					=  $this->input->post('gsis_no');
			$pwd_data['pag-ibig_no'] 				=  $this->input->post('pag-ibig_no');
			$pwd_data['philhealth_status'] 			=  $this->input->post('philhealth_status');
			$pwd_data['philhealth_no'] 				=  $this->input->post('philhealth_no');
			$pwd_data['blood_type'] 				=  $this->input->post('blood_type');
			$pwd_data['affilated_org'] 				=  $this->input->post('affilated_org');
			$pwd_data['contact_person'] 			=  $this->input->post('contact_person');
			$pwd_data['office_address'] 			=  $this->input->post('office_address');
			$pwd_data['office_telephone_no'] 		=  $this->input->post('office_telephone_no');
			$pwd_data['accomplished_by_lastname'] 	=  $this->input->post('accomplished_by_lastname');
			$pwd_data['accomplished_by_firstname'] 	=  $this->input->post('accomplished_by_firstname');
			$pwd_data['name_of_reporting_unit'] 	=  $this->input->post('name_of_reporting_unit');
			$pwd_data['registration_no'] 			=  $this->input->post('registration_no');
			$pwd_data['reporting_unit_lastname'] 	=  $this->input->post('reporting_unit_lastname');
			$pwd_data['reporting_unit_firstname'] 	=  $this->input->post('reporting_unit_firstname');
			$pwd_data['guardians_lastname'] 		=  $this->input->post('guardians_lastname');
			$pwd_data['guardians_firstname'] 		=  $this->input->post('guardians_firstname');
			$pwd_data['guardians_middlename'] 		=  $this->input->post('guardians_middlename');
			$pwd_data['mothers_lastname'] 			=  $this->input->post('mothers_lastname');
			$pwd_data['mothers_firstname'] 			=  $this->input->post('mothers_firstname');
			$pwd_data['fathers_lastname'] 			=  $this->input->post('fathers_lastname');
			$pwd_data['fathers_firstname'] 			=  $this->input->post('fathers_firstname');
			$pwd_data['fathers_middlename'] 		=  $this->input->post('fathers_middlename');


			echo "<pre>";
			print_r($pwd_data);
			echo "</pre>";

			
			
			$this->load->view('resident/', $pwd_data);
			//**** END
			$this->load->view('resident/footer');



		}
		public function view_PWD(){

			$pwd_data['pwd_registry_id']  		=  '';
			$pwd_data['resident_id']  			=  $this->session->userdata('logged_in')['user_id'] ;
			$pwd_data['pwd_number']  			=  $this->input->post('pwd_number');
			$pwd_data['type_disability'] 		=  $this->input->post('type_disability');
			$pwd_data['causes_of_disability']	=  $this->input->post('causes_of_disability');
			$pwd_data['home_address'] 			=  $this->input->post('home_address');
			$pwd_data['barangay'] 				=  $this->input->post('barangay');
			$pwd_data['municipality'] 			=  $this->input->post('municipality');
			$pwd_data['prov_address'] 			=  $this->input->post('prov_address');
			$pwd_data['region'] 				=  $this->input->post('region');
			$pwd_data[''] 						=  $this->input->post('');
			

		

		}
		
	}