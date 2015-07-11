<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends CI_Controller {
	// constructor
	// public function __construct() {
	// 	// call the controller construct
	// 	parent::__construct();
	// 	// load model
	// 	$this->load->model('m_login');
	// 	// page title
	// 	$this->page_title();
	// }

	public function index()
	{
		//if user is logged in
		// if (!empty($this->user)) {
		// 	redirect('dashboard/operator');
		// }

		// $data['message'] = $this->session->flashdata('message');
		// $data['title'] = 'BU | Pinaple SAS';
		$this->load->view('operatorLogin');

	}

	// public function login_validation()
	// {
	// 	// form validation
	// 	$this->form_validation->set_rules('user_name', 'Username', 'required|trim|xss_clean|max_length[100]');
	// 	$this->form_validation->set_rules('user_pass', 'Password', 'required|trim|xss_clean|sha1|max_length[50]');

	// 	if ($this->form_validation->run() == TRUE) {
	// 		// if validation run
	// 		if ($query = $this->m_login->login_validation(array($this->input->post('user_name'), $this->input->post('user_pass')))) {
	// 			if ($query['portal_id'] == $this->id_portal) {
	// 				// user log history
	// 				$this->m_login->user_log_visit(array($query['user_id'], $_SERVER['REMOTE_ADDR']));
	// 				// session register
	// 				$this->session->set_userdata('session_operator', $query);
	// 				redirect($query['role_default_url']);
	// 			} else {
	// 				$this->session->set_flashdata('message', 'Anda tidak mempunyai akses melalui portal ini');
	// 			}
	// 		} else {
	// 			$this->session->set_flashdata('message', 'Akun anda tidak dapat ditemukan');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('message', validation_errors());
	// 	}
	// 	redirect('login/operator');
	// }

	// // logout
	// public function logout() {
	// 	// log history
	// 	$this->m_login->user_log_leave(array($this->session->userdata('session_operator')['user_id']));
	// 	// destroy the session
	// 	$this->session->unset_userdata('session_operator');
	// 	redirect('login/operator');
	// }

	// // page title
	// public function page_title() {
	// 	$data['page_title'] = 'Operator Login';
	// 	$this->session->set_userdata($data);
	// }
}
