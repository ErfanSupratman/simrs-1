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
