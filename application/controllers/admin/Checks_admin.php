<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checks_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('admin/checks_admin_model');
	}


	public function getCampaigns($id=NULL){

		if (!$id){
			$return['erro'] = 58;
			$return['msg'] = 'Erro, deve-se informar pelo menos uma ID válida.';
			echo json_encode($return);
			exit;
		}

		$query = $this->checks_admin_model->getCampaingIDChecks($id);
		if (!$query){

			$return['erro'] = 59;
			$return['msg'] = 'Erro, nenhuma campanha encontrada com o ID informado.';
			echo json_encode($return);
			exit;
		}

		/*$foto_check	= $this->input->post('photos_checks');
		$t_photo 		= count($foto_check);
		for ($i=0; $i < $t_photo; $i++){

			$foto['id_airing_hours'] = $id;
			$foto['foto']   	= $foto_check[$i];
			$foto['principal']  = ($i == 0 ? 1 : 0);
			$this->checks_admin_model->doInsertFotoCheck($foto);
		}*/


		$return['erro'] = 0;
		$return['id_campaign'] 	= $query->id_campaign;
		echo json_encode($return);
		exit;
	}




	public function uploadMcDonalds(){

		$pasta = 'C:/wamp64/www/ad-ooh/uploads/mcdonalds/';

		$config['upload_path'] 	= $pasta;
		$config['allowed_types'] ='jpg|jpeg|bmp|png|gif';
		$config['max_size'] 	= 4096;
		$config['encrypt_name']	= TRUE;

		$this->load->library('upload',$config);

		if ($this->upload->do_upload('foto_check')){

			$retorno['file_name'] = $this->upload->data('file_name');
			$retorno['msg'] = 'Check feito com sucesso.';
			$retorno['erro'] = 0;

		}else {

			$retorno['msg']  = $this->upload->display_errors();
			$retorno['erro'] = 25;

		}
		echo json_encode($retorno);
	}
}
