<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checks_admin_model extends CI_Model{

	public function getCampaingIDChecks($id_campaign=NULL){
		$this->db->where('id_campaign',$id_campaign);
		$this->db->limit(1);
		return $this->db->get('campaign')->row();
	}

	public function doInsertFotoCheck($dados=NULL){

		if (is_array($dados)){
			$this->db->insert('produtos_fotos', $dados);
		}
	}

}
