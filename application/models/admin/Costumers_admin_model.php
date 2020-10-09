<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Costumers_admin_model extends CI_Model{

	public function getCostumersID($id=null){
		if ($id){
			$this->db->where('id_costumers', $id);
			$this->db->limit (1);
			$query = $this->db->get('costumers');
			return $query->row();
		}
	}

	public function getCostumers(){
		$query = $this->db->get('costumers');
		return $query->result();
	}

	public function doInsertCostumers($dados=NULL){

		if (is_array($dados)){

			$this->db->insert('costumers',$dados);

			if ($this->db->affected_rows() > 0){
				setMsg('cadastro', 'Cliente cadastrado com sucesso!','sucesso');
			}else{
				setMsg('cadastro', 'Erro ao cadastrar cliente!','erro');
			}

		}else {
			return FALSE;
		}

	}

	public function doUpdateCostumers($dados=NULL, $id_costumers=NULL ){

		if (is_array($dados)){

			$this->db->update('costumers', $dados, ['id_costumers' => $id_costumers]);

			if ($this->db->affected_rows() > 0){
				setMsg('msgCadastro', 'Cliente atualizado com sucesso.', 'sucesso');
			} else {
				setMsg('msgCadastro', 'Erro ao atualizar cliente.', 'erro');
			}
		}
	}

	public function doDeleteCostumers($id_costumers=NULL){

		if ($id_costumers){

			$this->db->delete('costumers', array('id_costumers' => $id_costumers));

			if ($this->db->affected_rows() > 0){
				setMsg('msgCadastro', 'Cliente apagado com sucesso.', 'sucesso');
			} else {
				setMsg('msgCadastro', 'Erro ao apagar cliente.', 'erro');
			}
		}

	}
}
