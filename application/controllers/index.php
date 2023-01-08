<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->utilities->validateSession();
		$this->load->library('Layouts');
		// $this->load->library('recaptcha');
		// $this->load->library('sendemail');
		// $this->load->model('auth/auths');
		// $this->utilities->setTotalVisitors($this->input->ip_address());
	}

	public function index() {
		//echo "dddd";
		$this->layouts->view('auth/signin');
	}
}