<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Reports_admin_model extends CI_Model{

	/*
	 *
	 * CAMPANHAS
	 *
	 */

	public function getCampaignReports(){
		$this->db->select('cp.id_campaign,
						   cp.model,
						   cp.type,
						   cp.costumer_id,
						   cp.area_id,
						   cp.dt_begin,
						   cp.dt_end,
						   co.costumer_name,
						   c.nome');
		$this->db->from('campaign cp');
		$this->db->join('costumers co','cp.costumer_id = co.id_costumers','inner');
		$this->db->join('cidades c','cp.area_id = c.id_cidades','inner');
		$this->db->where('c.id_estado = 26');
		$this->db->order_by('cp.id_campaign','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function getCampaignsID($id=NULL){

		if ($id){
			$this->db->where('id_campaign', $id);
			$this->db->limit (1);
			$query = $this->db->get('campaign');
			return $query->row();
		}
	}

	public function getPhotosChecks($id_check=NULL){
		if ($id_check) {
			$this->db->where('campaign_id', $id_check);
			return $this->db->get('photos_checks')->result();
		}
	}

	public function getCampaignCostumers(){
		$query = $this->db->get('costumers');
		return $query->result();
	}

	public function getCampaignCidades(){
		$query = $this->db->get('cidades');
		return $query->result();
	}

	public function doInsertCampaign( $dados=NULL){

		if (is_array($dados)){

			$this->db->insert('campaign',$dados);

			if ($this->db->affected_rows() > 0){
				setMsg('cadastro', 'Campanha adicionada com sucesso!','sucesso');
			}else{
				setMsg('cadastro', 'Erro ao adicionar campanha!','erro');
			}

		}else {
			return FALSE;
		}

	}

	public function doUpdateCampaign($dados=NULL, $id_campaign=NULL ){

		if (is_array($dados)){

			$this->db->update('campaign', $dados, ['id_campaign' => $id_campaign]);

			if ($this->db->affected_rows() > 0){
				setMsg('msgCadastro', 'Campanha atualizada com sucesso.', 'sucesso');
			} else {
				setMsg('msgCadastro', 'Erro ao atualizar a campanha.', 'erro');
			}
		}
	}

	public function doDeleteCampaign($id_campaign=NULL){

		if ($id_campaign){

			$this->db->delete('campaign', array('id_campaign' => $id_campaign));

			if ($this->db->affected_rows() > 0){
				setMsg('msgCadastro', 'Campanha apagada com sucesso.', 'sucesso');
			} else {
				setMsg('msgCadastro', 'Erro ao apagar campanha.', 'erro');
			}
		}

	}

	/*
	 *
	 * Impact Estimado
	 *
	 */
	public function getEstimatedImpactReports(){
		$this->db->select('est.date_cp as Data, 
						   est.estimated_value as Valores,
						   co.costumer_name as Clientes, 
						   cp.model as Modelo');
		$this->db->from('estimated_impact est');
		$this->db->join('campaign cp','est.campaign_id = cp.id_campaign','inner');
		$this->db->join('costumers co','cp.costumer_id = co.id_costumers','inner');
		$query = $this->db->get();
		return $query->result();
	}

	/*
	 *
	 * TEMPO DE VEÍCULAÇÃO
	 *
	 */

	public function getAiringHoursReports(){
		$this->db->select('ah.dt_cp as Data, 
						   ah.airing_hour_value as Valores,
						   co.costumer_name as Clientes, 
						   cp.model as Modelo');
		$this->db->from('airing_hours ah');
		$this->db->join('campaign cp','ah.cp_id = cp.id_campaign','inner');
		$this->db->join('costumers co','cp.costumer_id = co.id_costumers','inner');
		$query = $this->db->get();
		return $query->result();
	}

}
