<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Igddetail extends CI_Controller {
	public function index($page = 0)
	{
		// load template
		$data['content'] = 'igddetail/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

}