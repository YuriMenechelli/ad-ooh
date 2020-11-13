<?php
defined('BASEPATH')OR exit('No direct script access allowed!');

class Contact_model extends CI_Model{

	public function insertWebContact($dados=NULL){
		if (is_array($dados)){
			$this->db->insert('contact', $dados);

			if ($this->db->affected_rows() > 0){
				setMsg('msgCadastro','Obrigado! Breve entraremos em contato!','sucesso');
			}else{
				setMsg('msgCadastro','Erro ao entrar em contato','erro');
			}
		}else{
			return FALSE;
		}
	}
}
