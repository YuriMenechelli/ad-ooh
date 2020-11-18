<?php
defined('BASEPATH') OR exit('No direct script access allowed!');

class Motoristas extends CI_Controller{

	public function index(){
		$data['title']	= 'Ad-ooh Motoristas';
		$data['view'] 	= 'web/driver/motorista';
		$this->load->view('web/template/index',$data);
	}

	public function cadastro_step1(){

		$data['title']	= 'Seja um parceiro';
		$data['view']	= 'web/driver/cadastro_step1';
		$this->load->view('web/template/index',$data);
	}

	public function cadastro_step2(){

		$data['title']	= 'Seja um parceiro';
		$data['view']	= 'web/driver/cadastro_step2';
		$this->load->view('web/template/index',$data);
	}

	public function cadastro_step3(){

		$data['title']	= 'Seja um parceiro';
		$data['view']	= 'web/driver/cadastro_step3';

		$this->load->view('web/template/index',$data);
	}

	public function foto_perfil(){

		$folder = base_url().'public/web/imgs/drivers/address';

		$config['upload_path']	= $folder;
		$config['allowed_type']	= 'jpg|png|jpeg|tiff|gif';
		$config['max_size']		= 2048;
		$config['encrypt_name']	= TRUE;

		$this->load->library('upload',$config);

		if ($this->upload->do_upload('foto_perfil')){
			$return['file_name'] 	= $this->upload->data('file');
			$return['msg'] 			= 'Foto carregada com sucesso!';
			$return['erro'] 		= 0;
		} else {
			$return['msg'] 	= $this->upload->display_errors();
			$return['erro'] = 25;
		}
		echo json_encode($return);

	}
}
