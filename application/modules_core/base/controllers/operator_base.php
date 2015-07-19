<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator_base extends CI_Controller {
	protected $portal_id;
	protected $user;
	protected $char;
	protected $role;
	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('base/m_base');
		$this->load->model('base/m_user');
		// load library
		$this->load->library('form_validation');
        $this->load->library("pagination");
		// load other
		$this->get_user_login();
		$this->menu();
		$this->replace_character();
	}

	public function menu() {
		// id portal
		$this->portal_id = $this->config->item('portal_operator');
		// page active
		$active = $this->session->userdata('page_title');
		//echo $active;die;
		$parent_active = $this->session->userdata('parent_active');
		$child_active = $this->session->userdata('child_active');
		//echo $parent_active;die;
		// load menu
		$data['parent_menu'] = $this->m_base->get_parent_menu(array($this->portal_id, $this->user['role_id']));

		$html = '<div id="navigation" style="text-align:center"><ul id="nav">';
		foreach ($data['parent_menu'] as $value_parent) {
			if ($value_parent['read'] == 'true') {
				if ($data['child_menu'] = $this->m_base->get_child_menu_(array($value_parent['menu_id'], $this->user['role_id']))) {
					//jika punya anak
					if ($parent_active == $value_parent['menu_slug']) {
						$html .= "<li class='head-nav active'>";
					}
					else
					{
						$html .= "<li>";
					}
					$html .= "<a data-toggle='dropdown' href='javascript:;''>".$value_parent['menu_name'];
					if ($parent_active == $value_parent['menu_slug']) 
					{ 
						$html .="<span class='selected'></span>";						
						$html .="</a>";
					} else {					
						$html .="</a>";
					}

					$html .= "<ul style='width: auto'>";
					foreach ($data['child_menu'] as $value_child) {
						if ($value_child['read'] == 'true') {
							if ($child_active == $value_child['menu_slug']) {
								$html .= "<li class='active' style='width: auto'>";
							}
							else {
								$html .= "<li style='width: auto'>";								
							}
							$html .= " <a href='" . base_url() . $value_child['menu_url'] . "'>" . $value_child['menu_name'] . "</a></li>";
						}
					}					

					$html .= "</ul>";			
				}
				else {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='active'>";
						}
						else
						{
							$html .= "<li>";
						}
						$html .= "<a href='" . base_url() . $value_parent['menu_url'] . "'> <span>" . $value_parent['menu_name'] . "</span><span class='selected'></span></a></li>";
				}

			}
		}
		$html .= "</ul></div>";
		return $html;
	}

	// get user login
	protected function get_user_login() {
		// get user login
		$session = $this->session->userdata('session_operator');
		if (!empty($session)) {
			$this->user = $session;
		} else {
			redirect('login/operator');
		}
	}

	protected function check_auth($auth) {
		// get display page id
		$params = array($this->uri->segment(1) . '/' . $this->uri->segment(2));
		if ($result = $this->m_base->get_display_page_id($params)) {
			// get user auth
			$params = array($this->user['role_id'], $result['menu_id']);
			$role = $this->m_base->get_user_auth($params);
			$this->role = array('C' => substr($role['permission'], 0, 1), 'R' => substr($role['permission'], 1, 1), 'U' => substr($role['permission'], 2, 1), 'D' => substr($role['permission'], 3, 1));
			if ($this->role[$auth] != '1' || empty($auth)) {
				redirect('operator/forbidden/');
			}
		}
	}

	// character
	public function replace_character() {
		$this->char = array(" ", "'", "\"", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "+", "{", "}", "[", "]", "|", "\\", "?", "<", ">", ",", ".", "/", "~", "`");
	}
}
