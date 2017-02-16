<?php 

//CREATE A CUSTOM CONTROLLER CLASS WHICH IS MY CONTROLLER
class My_Controller extends CI_Controller{

	protected $rules = [];
	protected $fillable = [];
	// protected $model;

	public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(['array', 'inflector']);
	}

	public function load_view($filename, $data = []){
 	
		$header_data['page_name'] = 'Sign Up';

		$this->load->view('Header/login_header', $header_data);
		$this->load->view($filename, $data);
		$this->load->view('Footer/resident_footer');
 	}	

 	protected function run_rules(){ 

 		foreach($this->rules AS $field => $rule){

 			$this->form_validation->set_rules($field, humanize($field), $rule);
 		}

 		return $this->form_validation->run();
 	}

 	protected function extract_input($default = null){

 		return elements(array_merge(array_keys($this->rules), $this->fillable), $this->input->post(), $default);
 	}

 	protected function json_error_array(){

 		$this->output->set_content_type('json')
 			->set_output(json_encode([
 				'result' => false,
 				'errors' => array_values($this->form_validation->error_array())
			]));
 	}

 	protected function json_response($response){

 		$this->output->set_content_type('json')
 			->set_output(json_encode($response));
 	}
 	
}

// CREATE A CLASS MY_CONTROLLER WCICH EXTENDS MY_CONTROLLER
class My_FormsController extends My_Controller {

	protected $view_file = '';
	protected $preview_form_file = '';
	protected $view_bag = '';
	protected $header = '';
	protected $user_id = '';
	protected $table;
	protected $form_id;

	public function __construct() {

		parent::__construct();

		$this->load->model('Register/register_model', 'user');
		$this->load->model('Resident/resident_model', 'resident');

		if($this->session->userdata('logged_in')){

			$this->user_id = $this->session->userdata('logged_in')['user_id'];
		} 
	}

	public function index(){

	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', [
	    	'page_name' => $this->header
    	]);

	    $this->load->view('Resident/nav_view', $data);
	    $this->load->view("Resident/{$this->view_file}");
	    $this->load->view('Footer/resident_footer');
	}

	public function store()
	{
		// var_dump($this->run_rules());

		if(empty($this->rules) || $this->run_rules()){
			$rqData = [
				'resident_id' => $this->user_id,
				'forms_id' => $this->form_id,
				'request_status' => 'pending'
			];
			$id = $this->resident->insert($this->table, $rqData, $this->extract_input('-'));
			$this->json_response([
				'result' => true,
				'data' => $id 
			]);
		}else{
			$this->json_error_array();
		}
	}

	public function preview_form($id)
	{
		$user = $this->user->find($this->user_id);

	 	$this->load->view('Header/resident_header', [
	    	'page_name' => $this->header
    	]);
		$this->load->view('Resident/nav_view', 	$user);

		$this->load->view("Resident/{$this->preview_form_file}", [
			'data' => $this->resident->getForm($this->table, $id)
		]);

		$this->load->view('Footer/resident_footer');
	}

}


class My_SecretaryFormsListController extends My_Controller
{	

	protected $view_print = [
		1 	=> 'brgyclearance_print',
		2 	=> 'seniorcitizen_print',
		3 	=> 'kalipi_print',
		4 	=> 'amicable_settlement_print',
		5 	=> 'kasambahay_print',
		6	=> 'erpat_print',
		7 	=> 'solo_parents_print',
		8 	=> 'pwdregistration_print',
		9 	=> 'financialassistance_print',
		10 	=> 'complaint_print'
	];

	protected $view_files = [
		1 	=> 'brgyclearanceview',
		2 	=> 'seniorcitizen_view',
		3 	=> 'kalipiview',
		4 	=> 'amicable_settlementview',
		5 	=> 'kasambahayview',
		6 	=> 'erpatview',
		7 	=> 'solo_parentsview',
		8 	=> 'pwdregistrationview',
		9 	=> 'financialassistanceview',
		10 	=> 'complaintview'
	];

	protected $header = '';
	protected $form_id;

	public function __construct(){

		parent::__construct();

		$this->load->model('Resident/Resident_model', 'res');
		$this->load->model('Secretary/Secretarymodel', 'sec');

		if($this->session->userdata('logged_in')){

			$this->user_id = $this->session->userdata('logged_in')['user_id'];

		} 

		$this->form_id = $this->input->get('form_id') ?: 1;

	}

	public function index(){

	  	$data['items'] 	= $this->sec->get_pending_request_forms($this->form_id);
	  	$data['title'] = 'PENDING';

	    $this->load->view('Header/mainheader', [
	    	'page_name' => $this->header
    	]);

	    $this->load->view("Secretary/{$this->view_file}", $data);
	    $this->load->view('Footer/secretary_footer');
		
	}

	public function view_paid(){

	  	$data['items'] 	= $this->sec->get_paid_form($this->form_id);
	  	$data['title'] = 'PAID';

	   	$header_data['page_name'] = 'List of Paid Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Secretary/{$this->view_file}", $data);
	    $this->load->view('Footer/secretary_footer');
		
	}

	public function view_reviewed(){

	  	$data['items'] 	= $this->sec->get_reviewed_form($this->form_id);
	  	$data['title'] = 'REVIEWED';

	  	$header_data['page_name'] = 'List of Reviewed Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Secretary/{$this->view_file}", $data);
	    $this->load->view('Footer/secretary_footer');
		
	}

	public function view_approve(){

	  	$data['items'] 	= $this->sec->get_approved_forms($this->form_id);
	  	$data['title'] = 'APPROVE';

	  	$header_data['page_name'] = 'List of Approved Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Secretary/{$this->view_file}", $data);
	    $this->load->view('Footer/secretary_footer');
		
	}

	public function do_print($id,$form_id){	

		$data['items'] = $this->res->getForm($form_id, $id);
		$this->load->view("Secretary/{$this->view_print[$form_id]}", $data);
	}

	public function view_form($id, $form_id){

		$this->load->view('Header/mainheader');

		$data['formdata'] = $this->res->getForm($form_id, $id);

		$this->load->view("secretary/{$this->view_files[$form_id]}", $data);
		$this->load->view('Footer/secretary_footer');
	}

}

// CREATE CLASS FOR TREASURER CONTROLLER 
class My_TreasurerFormsListController extends My_Controller {

	protected $view_files = [
		1 	=> 'brgyclearanceview',
		2 	=> 'seniorcitizen_view',
		3 	=> 'kalipiview',
		4 	=> 'amicable_settlementview',
		5 	=> 'kasambahayview',
		6 	=> 'erpatview',
		7 	=> 'solo_parentsview',
		8 	=> 'pwdregistrationview',
		9 	=> 'financialassistanceview',
		10 	=> 'complaintview'
	];

	protected $header = '';
	protected $form_id;

	public function __construct(){

		parent::__construct();

		$this->load->model('Treasurer/Treasurermodel', 'tre');

		if($this->session->userdata('logged_in')){

			$this->user_id = $this->session->userdata('logged_in')['user_id'];
		} 

		$this->form_id = $this->input->get('form_id') ?: 1;

	}

	public function index(){

	  	$data['items'] 	= $this->tre->get_reviewed_forms($this->form_id);
	  	$data['title'] = 'REVIEWED';

	   	$header_data['page_name'] = 'List of Reviewed Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Treasurer/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}

	public function view_paid(){

	  	$data['items'] 	= $this->tre->get_paid_form($this->form_id);
	  	$data['title'] = 'PAID';

	   	$header_data['page_name'] = 'List of Paid Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Treasurer/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}


	public function view_form($id, $form_id){

		$this->load->view('Header/mainheader');

		$data['formdata'] = $this->tre->getForm($form_id, $id);

		$this->load->view("Treasurer/{$this->view_files[$form_id]}", $data);
		$this->load->view('Footer/mainfooter');
	}

}


//CREATE CLASS FOR CAPTAIN CONTROLLER which extends MY_CONTROLLER
class My_CaptainFormsListController extends My_Controller{

	protected $view_files = [
		1 	=> 'brgyclearanceview',
		2 	=> 'seniorcitizenview',
		3 	=> 'kalipiview',
		4 	=> 'amicable_settlementview',
		5 	=> 'kasambahayview',
		6	=> 'erpatview',
		7 	=> 'solo_parentsview',
		8 	=> 'pwdregistrationview',
		9 	=> 'financialassistanceview',
		10 	=> 'complaintview'
	];
	
	protected $header = '';
	protected $form_id;

	public function __construct(){

		parent::__construct();

		$this->load->model('Resident/Resident_model', 'res');
		$this->load->model('Captain/Captainmodel', 'cap');
		$this->load->model('Secretary/Secretarymodel', 'sec');

		if($this->session->userdata('logged_in')){

			$this->user_id = $this->session->userdata('logged_in')['user_id'];
		} 

		$this->form_id = $this->input->get('form_id') ?: 1;
	}

	public function index(){

	  	$data['items'] 	= $this->cap->get_paid_form($this->form_id);
	  	$data['title'] = 'PAID';
	    
	    $header_data['page_name'] = 'List of Paid Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("captain/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}

	public function view_paid(){

	  	$data['items'] 	= $this->cap->get_paid_form($this->form_id);
	  	$data['title'] = 'PAID';
	  
	   	$header_data['page_name'] = 'List of Paid Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("captain/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}

	public function view_pending(){
				
	  	$data['items'] 	= $this->cap->get_pending_request_forms($this->form_id);
	  	$data['title'] = 'PENDING';
	  
	   	$header_data['page_name'] = 'List of Pending Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("captain/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}

	public function view_approve()
	{			
	  	$data['items'] 	= $this->cap->get_approved_forms($this->form_id);
	  	$data['title'] = 'APPROVED';
	   
	   	$header_data['page_name'] = 'List of Approved Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Captain/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}

	public function view_reviewed(){

	  	$data['items'] 	= $this->cap->get_reviewed_form($this->form_id);
	  	$data['title'] = 'REVIEWED';

	  	$header_data['page_name'] = 'List of Reviewed Request';

	  	$this->load->view('Header/mainheader', $header_data);
	    $this->load->view("Captain/{$this->view_file}", $data);
	    $this->load->view('Footer/mainfooter');
		
	}	
	
	public function view_form($id, $form_id)
	{
	
		$this->load->view('Header/mainheader');
		
		$data['formdata'] = $this->res->getForm($form_id, $id);
		$this->load->view("Captain/{$this->view_files[$form_id]}", $data);
		$this->load->view('Footer/mainfooter');
	}

}