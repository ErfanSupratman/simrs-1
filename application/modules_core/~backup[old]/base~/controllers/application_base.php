<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application_base extends CI_Controller {


	public function __construct() {
		// call the controller construct
		parent::__construct();
		// load model
		$this->load->model('base/m_base');
		$this->menu();
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'operator';
		$data['menu_view'] = $this->menu();
		$this->load->view('operator/header',$data);
	}

	// menu
	// public function menu() {
	// 	// id portal
	// 	$this->id_portal = $this->config->item('portal_profile');
	// 	// page active
	// 	$active = $this->session->userdata('title');
	// 	$html = "<ul id='nav'>";
	// 	// load menu
	// 	$data['parent_menu'] = $this->m_base->get_parent_menu(array($this->id_portal));
	// 	foreach ($data['parent_menu'] as $value_parent) {
	// 		if ($data['child_menu'] = $this->m_base->get_child_menu(array($value_parent['id_menu']))) {
	// 			$html .= "<li class='dropdown";
	// 			if ($active == "Community research" OR $active == "Research" OR $active == "Teaching") {
	// 				$html .= " active";
	// 			}
	// 			$html .= "'><a href='#'>" . $value_parent['menu_name'] . " <i class='icon-caret-down'></i></a>";
	// 			$html .= "<ul class='dropdown-menu'>";
	// 			foreach ($data['child_menu'] as $value_child) {
	// 				$html .= "<li><a href='" . base_url() . "$value_child[menu_url]' />" . $value_child['menu_name'] . "</a></li>";
	// 			}
	// 			$html .= "</ul></li>";
	// 		} else {
	// 			$html .= "<li";
	// 			if ($active == $value_parent['menu_name']) {
	// 				$html .= " class='active'";
	// 			}
	// 			$html .= "><a href='" . base_url() . "$value_parent[menu_url]' />" . $value_parent['menu_name'] . "</a></li>";
	// 		}
	// 	}
	// 	$html .= "</ul>";
	// 	return $html;
	// }

	public function menu(){
		$this->load->model('m_base');
		$data['menu'] = $this->m_base->get_menu_admin();
		$b_url = base_url();

		$html = "
			<div id='navigation'>
    			<ul id='av'>
		";
		foreach($data['menu'] as $menu){
			$html .= "<li class='head-nav'><a href='".$menu['menu_url']."'>".$menu['nama_menu']."</a>
				<ul>
			";

			$data['child'] = $this->m_base->get_child_menu($menu['menu_id']);
			foreach ($data['child'] as $child) {
				$html .= "<li><a href='" .$b_url."".$child['menu_url']."'>".$child['nama_menu']."</a></li>";
			}

			$html .= "
				</ul>
			</li>";
		}
 		
		$html .= "
				</ul>
			</div>
		";

		return $html;
	}

}
