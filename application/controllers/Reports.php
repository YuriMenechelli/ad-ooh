<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{

	/*public function __construct(){
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			redirect('login');
			setMsg('msgCadastro','sua sessão expirou!','erro');
		}
	}*/

	public function index(){
		$this->load->view('web/reports/outback/list');
	}

}
