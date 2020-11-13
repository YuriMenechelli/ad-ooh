<?php
defined('BASEPATH')OR exit('No direct script access allowed!');

class Contact_model_admin extends CI_Model{

	public function getContacts(){
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->order_by('dt_inc','DESC');
		$query = $this->db->get();
		return $query->result();
	}
}
