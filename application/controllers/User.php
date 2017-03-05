<?php

class User extends My_Controller
{

	protected $rules = [
		'firstname' => 'required|trim',
		'lastname' => 'required|trim',
		'username' => 'required|required|min_length[4]|is_unique[users.username]',
		'password' => 'required|trim',
		'confirm_password' => 'required|trim|matches[password]',
		'email_address' => 'required|trim',
		'user_type' => 'required|trim'
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
	}

	public function store()
	{
		if($this->run_rules()){

			$user = $this->extract_input();
			$user['password'] = md5($user['password']);
			unset($user['confirm_password']);
			$this->user->create($user);
			$this->json_response([
				'result' => true
			]);

			

		}else{
			$this->json_error_array();
		}
	}


}