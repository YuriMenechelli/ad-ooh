<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checks_admin extends CI_Controller {

	public function uploadMcDonalds(){

		$pasta = 'C:/wamp64/www/ad-ooh/uploads/mcdonalds/';

		$config['upload_path'] 	= $pasta;
		$config['allowed_types'] ='jpg|jpeg|bmp|png|gif';
		$config['max_size'] 	= 4096;
		$config['encrypt_name']	= TRUE;

		$this->load->library('upload',$config);

		if ($this->upload->do_upload('foto_produto')){

			$retorno['file_name'] = $this->upload->data('file_name');
			$retorno['msg'] = 'Foto enviada com sucesso.';
			$retorno['erro'] = 0;

		}else {

			$retorno['msg']  = $this->upload->display_errors();
			$retorno['erro'] = 25;

		}
		echo json_encode($retorno);
	}
}
