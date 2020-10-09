<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Config_admin extends CI_Controller {

	public function index(){

		$data['title'] 				= 'Configurações do Sistema';
		$data['breadcrumb_title']	= 'Menu Principal';
		$data['view']				= 'admin/sistema/config';
		$data['session']			= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index', $data);
	}
}
