<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
    	
    	parent::__construct();

      $this->load->model('User_model', 'user');
      $this->load->model('Register/Register_model');  
      
     	if($result = $this->session->userdata('logged_in')){

        	if($result['user_type'] == 'captain'){
          		redirect('captain_listing');
       		 }
          	else if($result['user_type'] == 'secretary'){
           		redirect('secretary_listing');
        	}
        	else if($result['user_type'] == 'treasurer'){
           		redirect('treasurer_listing');
        	}
        	else{
            	redirect('home/home_profile');
			}
		}
	}

	public function index() {
		
		$header_data['page_name'] = 'Sign In';
    	
    	$this->load->view('Header/login_header',$header_data);
    	$this->load->view('Login/login');
    	$this->load->view('Footer/resident_footer');
  	}

  public function login_attempt(){

    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run()){

      $this->load->model('Login/Login_model');

      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $result = $this->Login_model->attempt($username,$password);
      
      if(!$result){

          $header_data['page_name'] = 'Sign In';

          $this->load->view('Header/login_header', $header_data);
          $this->load->view('Login/login', array('error'=> 'Invalid username or password'));
          $this->load->view('Footer/resident_footer');
      }

      else{

        $this->session->set_userdata('logged_in', $result);

        if($result['user_type'] == 'captain') {
          
          redirect('captain_listing/?form_id=1');
        }
          
        else if($result['user_type'] == 'secretary') {

           redirect('secretary_listing?form_id=1');

        }
        else if($result['user_type'] == 'treasurer') {

           redirect('treasurer_listing?form_id=1');
        }

        else{
            
            redirect('home/MyRequestedForms');
        }
      }
    }
      
      else {
        
        $header_data['page_name'] = 'Error Login Attempt (Sign In)';  
        
        $this->load->view('Header/login_header',$header_data);
        $this->load->view('Login/login', array('error1'=> 'Enter your Username or Password!'));
        $this->load->view('Footer/resident_footer');
        }

  }
}
