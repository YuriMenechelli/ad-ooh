<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_admin extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			redirect('login');
			setMsg('msgCadastro','sua sessão expirou!','erro');
		}
		$this->load->model('admin/reports_admin_model');
	}

	/*
	 *
	 * CAMPANHAS
	 *
	 */

	//Index das campanhas.
	public function campaigns()	{
		$data['title'] 		= 'Listar campanhas';
		$data['view']		= 'admin/reports/campaigns';
		$data['campaigns']	= $this->reports_admin_model->getCampaignReports();
		$data['session']	= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index', $data);
	}


	//Módulo das campanhas
	public function campaigns_module($id_campaign=NULL){

		$dados 	= NULL;
		$photos = NULL;

		if ($id_campaign){
			$data['title'] = 'Atualizar as Campanhas';

			$query = $this->reports_admin_model->getCampaignsID($id_campaign);
			if ( $query ) {
				$dados = $query;
				$photos = $this->reports_admin_model->getPhotosChecks($query->id_campaign);
			}else {
				setMsg('msgCadastro','Campanha não encontrada!','erro');
				redirect('admin/reports_admin/campaigns','refresh');
			}

		}else{
			$data['title'] = 'Adicionar Campanhas';
		}

		$data['dados'] 		= $dados;
		$data['view'] 		= 'admin/reports/campaign_module';
		$data['nav']		= array('titulo' => 'Lista de campanhas', 'link' => 'admin/reports_admin/campaigns');
		$data['costumer']	= $this->reports_admin_model->getCampaignCostumers();
		$data['cidades']	= $this->reports_admin_model->getCampaignCidades();
		$data['photos'] 		= $photos;


		$this->load->view('admin/template/index', $data);
	}


	//tratamento dos dados daa campanhaa.
	public function campaigns_core(){

		$this->form_validation->set_rules('model', 'Modelo','trim|required');
		$this->form_validation->set_rules('type', 'Tipo','trim|required');

		if ($this->form_validation->run() == TRUE){

			if ($this->input->post('id_campaign')){

				$data['costumer_id'] 		 = $this->input->post('costumer_id');
				$data['type'] 				 = $this->input->post('type');
				$data['model'] 				 = $this->input->post('model');
				$data['area_id'] 			 = $this->input->post('area_id');
				$data['dt_begin']			 = $this->input->post('dt_begin');
				$data['dt_end']			     = $this->input->post('dt_end');

				$data['dt_update']	= dataNow();
				$id = $this->input->post('id_campaign');
				$this->reports_admin_model->doUpdateCampaign($data, $id);
				redirect('admin/reports_admin/campaigns','refresh');

			} else {

				$data['dt_inc']		= dataNow();
				$this->reports_admin_model->doInsertCampaign($data);

				$id_campaign = $this->session->userdata('last_id');
				setMsg('msgCadastro', 'Campanha adicionada com sucesso!', 'sucesso');
				redirect('admin/reports_admin/campaigns','refresh');
			}

			$foto_check		= $this->input->post('photos_checks');
			$t_photo 		= count($foto_check);
			for ($i=0; $i < $t_photo; $i++){
				$foto['id_photos_checks'] 	= $id_campaign;
				$foto['photos_check']   	= $foto_check[$i];
				$foto['main']  				= ($i == 0 ? 1 : 0);
				$this->reports_admin_model->doInsertPhotoChecks($foto);
			}

		}else{
			$this->campaigns_module();
		}
	}

	//exclusão das campanhas
	public function campaigns_del ($id_campaign = NULL){

		if ($id_campaign){
			$this->reports_admin_model->doDeleteCampaign($id_campaign);
			redirect('admin/reports_admin/campaigns','refresh');
		} else {
			setMsg('msgCadastro', 'Selecione uma campanha para a exclusão!', 'erro');
			redirect('admin/reports_admin/campaigns','refresh');
		}
	}



	/*
	 *
	 * IMPACTO ESTIMADO
	 *
	 */

	public function estimated_impact()	{
		$data['title'] 		= 'Listar impactos estimados';
		$data['view']		= 'admin/reports/estimated_impact';
		$data['estimated']	= $this->reports_admin_model->getEstimatedImpactReports();
		$data['session']	= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index', $data);
	}


	/*
	 *
	 * TEMPO DE VEICULAÇÃO
	 *
	 */
	public function airing_hours()	{
		$data['title'] 	= 'Listar tempo de veiculação';
		$data['view']	= 'admin/reports/airing_hours';
		$data['airing']	= $this->reports_admin_model->getAiringHoursReports();
		$data['session']= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index', $data);
	}
}
