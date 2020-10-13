<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Home_admin_model extends CI_Model{

	public function getTotal($tabela=NULL) {
		if ($tabela){
			$query = $this->db->get($tabela);
			return $query->num_rows();
		}
	}

	public function getUserBySession(){

		$id = $this->session->userdata('user_id');

		$this->db->select('id, CONCAT(first_name," ",last_name) as nome, company as cia');
		$this->db->from('users');
		$this->db->where('id =', $id);

		$query = $this->db->get()->row();
		return $query;

	}

	public function getCostumersIDHome($id_costumers=NULL){
		$this->db->where('id_costumers',$id_costumers);
		$this->db->limit(1);
		return $this->db->get('costumers')->row();
	}

	public function doUpdateCostumersHome($dados=NULL, $id_costumers=NULL ){
		if (is_array($dados)){
			$this->db->update('costumers', $dados, ['id_costumers' => $id_costumers]);
		}
	}

	public function getCostumerHome(){
		$query = $this->db->get('costumers');
		return $query->result();
	}

	public function getCampaignHome(){
		$this->db->select('*');
		$this->db->from('campaign cp');
		$this->db->join('costumers co','cp.costumer_id = co.id_costumers','inner');
		$this->db->join('cidades c','cp.area_id = c.id_cidades','inner');
		$this->db->order_by('cp.id_campaign','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function getAiringHoursHome(){
		$this->db->select('ah.id_airing_hours as id,
						   ah.dt_cp as Data, 
						   ah.airing_hour_value as Valores,
						   co.costumer_name as Clientes, 
						   cp.model as Modelo');
		$this->db->from('airing_hours ah');
		$this->db->join('campaign cp','ah.cp_id = cp.id_campaign','inner');
		$this->db->join('costumers co','cp.costumer_id = co.id_costumers','inner');
		$query = $this->db->get();
		return $query->result();
	}

	public function getEstimatedImpactHome(){
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

}
