<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
 
  // suitable for any initialization and instantiation
  public function __construct() {

        parent::__construct();
        
        if(!$this->session->userdata('logged_in')){
          	redirect('login');
        }
        
  }

  //function for logout
  public function logout(){

      //unset the session
  		$this->session->unset_userdata('logged_in');
      //destroys the session
  		$this->session->sess_destroy();
  		redirect(base_url('login'));
  			
  }
}