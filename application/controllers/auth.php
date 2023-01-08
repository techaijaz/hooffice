<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('auth/auths');
		$this->load->helper('string');
		$this->load->library('Layouts');
		
	}
	
	
	public function signin() {
		$this->form_validation->set_rules(
			'username', 'Username',
			'required', array(
				'required'      => 'You have not provided %s.'
			)
		);
		$this->form_validation->set_rules(
			'password', 'Password', 'trim|required|min_length[1]', array(
				'required'      => 'You have not provided %s.',
				//'min_length'    => '%s should be eight(8) characters.'
			)
		);
		if ($this->form_validation->run('signin') == FALSE) {
			$this->layouts->view('auth/signin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->auths->login($username,$password);
			if($data){
				$sess_data = array('login' => TRUE, 'uname' => $data['username'], 'uid' => $data['id'], 'active_status' => $data['is_active'], 'email' => $data['email'], 'user_type' => $data['role_id']);
				//print_r($sess_data);
				//$saveurl = $this->utilities->getserchurl();
				$this->utilities->setSession($sess_data);
				$usertype = $this->utilities->getUserType();
				//print_r($usertype);die;
				if($usertype=='admin'){
					redirect('dashboard/admin');
				}else if($usertype=='user'){
					redirect('dashboard/user');
				}
			}else{
				redirect('auth/signin');
			}
		}
	}

	public function logout() {
		$sesdata = $this->utilities->getSessionUserData('login');
		if (isset($sesdata) && $sesdata === true) {
			$this->session->sess_destroy();
			redirect('/');
		}else{
			redirect('/');
		}
	}
	
}
