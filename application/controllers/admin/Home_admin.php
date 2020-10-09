<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login_admin');
			setMsg('msgCadastro','sua sessão expirou!','erro');
		}
		$this->load->model('admin/home_admin_model');
	}

	public function index(){
		$data['title']				= 'Ad-ooh menu principal';
		$data['breadcrumb_title'] 	= 'Menu Principal';
		$data['view'] 				= 'admin/principal/dashboard';
		$data['t_users']			= $this->home_admin_model->getTotal('users');
		$data['t_costumer']			= $this->home_admin_model->getTotal('costumers');
		$data['t_cp']				= $this->home_admin_model->getTotal('campaign');
		$data['t_est']				= $this->home_admin_model->getTotal('estimated_impact');
		$data['t_air']				= $this->home_admin_model->getTotal('airing_hours');
		$data['users'] 				= $this->ion_auth->users()->result();
		$data['costumers']			= $this->home_admin_model->getCostumerHome();
		$data['campaigns']			= $this->home_admin_model->getCampaignHome();
		$data['airing']				= $this->home_admin_model->getAiringHoursHome();
		$data['estimated']			= $this->home_admin_model->getEstimatedImpactHome();
		$data['session']			= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index',$data);
	}

	public function getClientes($id=NULL){

		if (!$id){

			$return['erro'] = 58;
			$return['msg'] = 'Erro, deve-se informar pelo menos uma ID válida.';
			echo json_encode($return);
			exit;
		}

		$query = $this->home_admin_model->getCostumersIDHome($id);
		if (!$query){

			$return['erro'] = 59;
			$return['msg'] = 'Erro, nenhum cliente encontrado com a ID informada.';
			echo json_encode($return);
			exit;
		}

		switch ($query->active){
			case 0 :
				$active = '<span class="label label-danger">Inativo</span>';
				break;
			case 1 :
				$active = '<span class="label label-success">Ativo</span>';
				break;
		}

		$return['erro'] = 0;
		$return['id_costumers'] 	= $query->id_costumers;
		$return['active'] 			= $active;
		echo json_encode($return);
		exit;
	}

	public function mudarStatus(){
		if ($this->input->post('input_status')){
			$id_costumers			= $this->input->post('input_id');

			$clientes['active'] 	= $this->input->post('input_status');
			$clientes['dt_update'] 	= dataDB();
			$this->home_admin_model->doUpdateCostumersHome($clientes, $id_costumers);

			$return['erro'] = 0;
			$return['msg'] = 'Estatus do cliente atualizado!';
			echo json_encode($return);
			exit;
		}else{
			$return['erro'] = 60;
			$return['msg'] = 'O campo status é obrigatório';
			echo json_encode($return);
			exit;
		}
	}
}
