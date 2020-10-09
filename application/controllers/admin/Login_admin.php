<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$this->form_validation->set_rules('pass','Senha','required');
		$this->form_validation->set_rules('email','E-mail','required');

		if ($this->form_validation->run() == TRUE){

			$identity = $this->input->post('email');
			$password = $this->input->post('pass');

			if ($this->ion_auth->login($identity,$password)){
				setMsg('msgLogin','Sessão logada','sucesso');
				redirect('admin');
			}else {
				setMsg('msgLogin','Usuário e/ou senha incorretos','erro');
				redirect('admin/login_admin');
			}
		}else {
			$this->load->view('admin/template/login');
		}
	}

	public function sair(){
		$this->ion_auth->logout();
		redirect('admin/login_admin');
	}
}
