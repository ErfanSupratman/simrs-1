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

	public function menu_vertical() {
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
		//echo '<pre>'; print_r($data['parent_menu']) ; die;

		$tot = count($data['parent_menu']);
		$i = 1;
		$html = "";
		foreach ($data['parent_menu'] as $value_parent) {
			if ($value_parent['read'] == 'true') {
				//jika bisa read maka tampilkan
				if ($data['child_menu'] = $this->m_base->get_child_menu(array($value_parent['menu_id'], $this->user['role_id']))) {
					// echo "punya anak";
                	if ($i == 1) {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='start active open'>";
						}
						else
						{
							$html .= "<li class='start'>";
						}
                	} elseif ($i == $tot) {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='last active open'>";
						}
						else
						{
							$html .= "<li class='last'>";
						}
                	} else {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='active open'>";
						}
						else
						{
							$html .= "<li>";
						}
                	}

					$html .= "<a href='javascript:;'><i class='fa fa-".$value_parent['menu_icon']."'></i><span class='title'> ".$value_parent['menu_name']."</span>";
					if ($parent_active == $value_parent['menu_slug']) 
					{ 
						$html .="<span class='selected'></span>";						
	                    $html .="<span class='arrow open'></span></a>";
					} else {
	                    $html .="<span class='arrow '></span></a>";
					}
					$html .= "<ul class='sub-menu'>";
					foreach ($data['child_menu'] as $value_child) {
						if ($value_child['read'] == 'true') {
							if ($child_active == $value_child['menu_slug']) {
								$html .= "<li class='active'>";
							}
							else {
								$html .= "<li>";								
							}
							$html .= " <a href='" . base_url() . $value_child['menu_url'] . "'> <i class='fa fa-" . $value_child['menu_icon'] . "'></i> " . $value_child['menu_name'] . "</a></li>";
						}
					}					
					$html .= "</ul></li>";					
				}
				else {
					// echo "tidak punya anak"
                	if ($i == 1) {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='start active'>";
						}
						else
						{
							$html .= "<li class='start'>";
						}
                	} elseif ($i == $tot) {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='last active'>";
						}
						else
						{
							$html .= "<li class='last'>";
						}
                	} else {
						if ($parent_active == $value_parent['menu_slug']) {
							$html .= "<li class='active'>";
						}
						else
						{
							$html .= "<li>";
						}
                	}

					$html .= "<a href='" . base_url() . $value_parent['menu_url'] . "'> <i class='fa fa-" . $value_parent['menu_icon'] . "'></i> <span>" . $value_parent['menu_name'] . "</span></a></li>";			


				}
			}
			else {
			}
			$i = $i + 1;
		}
		return $html;
	}

	// public function menu() {

	// 	// id portal
	// 	$this->portal_id = $this->config->item('portal_operator');
	// 	// page active
	// 	$active = $this->session->userdata('page_title');
	// 	//echo $active;die;
	// 	$parent_active = $this->session->userdata('parent_active');
	// 	$child_active = $this->session->userdata('child_active');
	// 	//echo $parent_active;die;
	// 	// load menu
	// 	$data['parent_menu'] = $this->m_base->get_parent_menu(array($this->portal_id, $this->user['role_id']));
	// 	//echo '<pre>'; print_r($data['parent_menu']) ; die;

	// 	$html = "<div class='hor-menu hidden-sm hidden-xs'><ul class='nav navbar-nav'>";
	// 	foreach ($data['parent_menu'] as $value_parent) {
	// 		if ($value_parent['read'] == 'true') {
	// 			if ($data['child_menu'] = $this->m_base->get_child_menu(array($value_parent['menu_id'], $this->user['role_id']))) {
	// 				//jika punya anak
	// 				if ($parent_active == $value_parent['menu_slug']) {
	// 					$html .= "<li class='classic-menu-dropdown active'>";
	// 				}
	// 				else
	// 				{
	// 					$html .= "<li class='classic-menu-dropdown'>";
	// 				}
	// 				$html .= "<a data-toggle='dropdown' href='javascript:;''><i class='fa fa-".$value_parent['menu_icon']."'></i>&nbsp;".$value_parent['menu_name'];
	// 				if ($parent_active == $value_parent['menu_slug']) 
	// 				{ 
	// 					$html .="<span class='selected'></span><i class='fa fa-angle-down'></i>";						
	// 					$html .="</a>";
	// 				} else {
	// 					$html .="<i class='fa fa-angle-down'></i>";						
	// 					$html .="</a>";
	// 				}

	// 				$html .= "<ul class='dropdown-menu pull-left'>";
	// 				foreach ($data['child_menu'] as $value_child) {
	// 					if ($value_child['read'] == 'true') {
	// 						if ($child_active == $value_child['menu_slug']) {
	// 							$html .= "<li class='active'>";
	// 						}
	// 						else {
	// 							$html .= "<li>";								
	// 						}
	// 						$html .= " <a href='" . base_url() . $value_child['menu_url'] . "'> <i class='fa fa-" . $value_child['menu_icon'] . "'></i> " . $value_child['menu_name'] . "</a></li>";
	// 					}
	// 				}					

	// 				$html .= "</ul>";			
	// 			}
	// 			else {
	// 					if ($parent_active == $value_parent['menu_slug']) {
	// 						$html .= "<li class='classic-menu-dropdown active'>";
	// 					}
	// 					else
	// 					{
	// 						$html .= "<li class='classic-menu-dropdown'>";
	// 					}
	// 					$html .= "<a href='" . base_url() . $value_parent['menu_url'] . "'> <i class='fa fa-" . $value_parent['menu_icon'] . "'></i>&nbsp; <span>" . $value_parent['menu_name'] . "</span><span class='selected'></span></a></li>";
	// 			}

	// 		}
	// 	}
	// 	$html .= "</ul></div>";
	// 	// echo "<code>"; echo $html; die;
	// 	return $html;


	}

	public function menu2() {
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
		//echo '<pre>'; print_r($data['parent_menu']) ; die;

		$html = "<ul id='leftsidePanel' class='nav nav-pills nav-stacked nav-bracket'>";
		foreach ($data['parent_menu'] as $value_parent) {

			if ($value_parent['read'] == 'true') {
				//jika bisa read maka tampilkan
				if ($data['child_menu'] = $this->m_base->get_child_menu(array($value_parent['menu_id'], $this->user['role_id']))) {
					// echo "punya anak";
					$html .= "<li class='nav-parent";
					//echo $parent_active; echo $value_parent['menu_slug'];die;
					if ($parent_active == $value_parent['menu_slug']) {
						$html .= " nav-active active";
					}
					$html .= "'> <a href='#'> <i class='fa fa-".$value_parent['menu_icon']."'></i> <span>".$value_parent['menu_name']."</span></a>";
					$html .= "<ul class='children'";
					foreach ($data['child_menu'] as $value_child) {
						if ($child_active == $value_child['menu_slug']) {
							$html .=  "style='display: block;'";
						}						
					}					 
					$html .= ">";
					foreach ($data['child_menu'] as $value_child) {
						if ($value_child['read'] == 'true') {
							if ($child_active == $value_child['menu_slug']) {
								$html .= "<li class='active'>";
							}
							else {
								$html .= "<li>";								
							}
							$html .= " <a href='" . base_url() . $value_child['menu_url'] . "'> <i class='fa fa-" . $value_child['menu_icon'] . "'></i>" . $value_child['menu_name'] . "</a></li>";
						}
					}					
					$html .= "</ul></li>";				

				}
				else {
					// echo "tidak punya anak"
					if ($parent_active == $value_parent['menu_slug']) {
						$html .= "<li class='active'>";
					}
					else
					{
						$html .= "<li>";						
					}
					$html .= "<a href='" . base_url() . $value_parent['menu_url'] . "'> <i class='fa fa-" . $value_parent['menu_icon'] . "'></i> <span>" . $value_parent['menu_name'] . "</span></a></li>";			
				}
			}
			else {
			}
		}
		$html .= "</ul>"; 
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
