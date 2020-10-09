<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Costumers_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('admin/costumers_admin_model');
	}

	public function index(){
		$data['title'] 		= 'Lista de Clientes';
		$data['view'] 		= 'admin/costumers/costumers_list';
		$data['costumers']	= $this->costumers_admin_model->getCostumers();
		$data['session']	= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index',$data);
	}

	public function costumers_module($id_costumers=NULL){

		$dados = NULL;

		if ($id_costumers){
			$dados = $this->costumers_admin_model->getCostumersID($id_costumers);
			if ( !$dados ) {
				setMsg('msgCadastro','Cliente não encontrado!','erro');
				redirect('admin/costumers_admin','refresh');
			}
			$data['title'] = 'Atualizar clientes';
		}else{
			$data['title'] = 'Cadastrar clientes';
		}

		$data['dados'] 		= $dados;
		$data['view'] 		= 'admin/costumers/costumers_module';
		$data['nav']		= array('titulo' => 'Lista de clientes', 'link' => 'admin/costumers_admin');

		$this->load->view('admin/template/index', $data);
	}


	public function costumers_core(){

		$this->form_validation->set_rules('costumer_name', 'Nome Fantasia','trim|required');

		if ($this->form_validation->run() == TRUE){

			if ($this->input->post('id_costumers')){

				$id = $this->input->post('id_costumers');

				$data['costumer_name'] 		 = $this->input->post('costumer_name');
				$data['active'] 		 	 = $this->input->post('active');


				$data['dt_update']	= dataNow();

				$this->costumers_admin_model->doUpdateCostumers($data, $id);
				redirect('admin/costumers_admin','refresh');

			} else {
				$data['costumer_name'] 		 = $this->input->post('costumer_name');
				$data['active'] 		 	 = $this->input->post('active');
				$data['dt_inc']		= dataNow();
				$this->costumers_admin_model->doInsertCostumers($data);
				setMsg('msgCadastro', 'Cliente cadastrado com sucesso!', 'sucesso');
				redirect('admin/costumers_admin','refresh');
			}

		}else{
			$this->costumers_module();
		}
	}

	public function costumers_del ($id_costumer = NULL){

		if ($id_costumer){
			$this->costumers_admin_model->doDeleteCostumers($id_costumer);
			redirect('admin/costumers_admin','refresh');

		} else {
			setMsg('msgCadastro', 'Selecione um cliente para a exclusão!', 'erro');
			redirect('admin/rcostumers_admin','refresh');
		}
	}
}
