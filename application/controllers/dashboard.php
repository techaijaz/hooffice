<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('auth/auths');
		// $this->load->helper('string');
		$this->load->library('Layouts'); 
		
	}

	function user(){
		$this->layouts->dbview('userdb',$data=[],'userdefault');
	}

}


