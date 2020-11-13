<?php
defined('BASEPATH')OR exit('No direct script access allowed!');

class Checks extends CI_Controller{

	public function index(){
		$data['title'] 	= 'Ad-ooh Checks';
		$data['view'] 	= 'web/checks/list';

		$this->load->view('web/template/index', $data);
	}
}
