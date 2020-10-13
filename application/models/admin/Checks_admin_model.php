<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checks_admin_model extends CI_Model{

	public function getAiringIDChecks($id_airing_hours=NULL){
		$this->db->where('id_airing_hours',$id_airing_hours);
		$this->db->limit(1);
		return $this->db->get('airing_hours')->row();
	}

}
