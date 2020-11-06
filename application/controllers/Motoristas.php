<?php
defined('BASEPATH') OR exit('No direct script access allowed!');

class Motoristas extends CI_Controller{

	public function index(){
		$data['title']	= 'Ad-ooh Motoristas';
		$data['view'] 	= 'web/driver/motorista';
		$this->load->view('web/template/index',$data);
	}

	public function cadastro(){

		$data['title']	= 'Seja um parceiro';
		$data['view']	= 'web/driver/cadastro';
		$this->load->view('web/template/index',$data);
	}
}
