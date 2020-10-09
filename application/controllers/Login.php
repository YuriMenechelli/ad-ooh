<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

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
				redirect('reports');
			}else {
				setMsg('msgLogin','Usuário e/ou senha incorretos','erro');
				redirect('login');
			}
		}else {
			$this->load->view('web/login/login');
		}
	}

	public function sair(){
		$this->ion_auth->logout();
		redirect('login');
	}
}
