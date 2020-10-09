<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('admin/login_admin');
		}
	}

	public function index(){
			$data['title'] 		= 'Lista de usuários';
			$data['view'] 		= 'admin/users/users_list';
			$data['users'] 		= $this->ion_auth->users()->result();
			$data['session']	= $this->home_admin_model->getUserBySession();

			$this->load->view('admin/template/index', $data);

	}

	public function users_module($id=NULL){
		$dados = NULL;

		if ($id){

			$dados = $this->ion_auth->user($id)->row();
			if ( !$dados ) {
				setMsg('msgCadastro','Usuário não encontrado!','erro');
				redirect('admin/users_admin','refresh');
			}
			$data['title'] = 'Atualizar cadastro';
		}else{
			$data['title'] = 'Novo Cadastro';
		}

		$data['dados'] 			= $dados;
		$data['view'] 			= 'admin/users/users_module';
		$data['nav']			= array('titulo' => 'Lista de usuários', 'link' => 'admin/users_admin');

		$this->load->view('admin/template/index', $data);
	}

	public function core(){

		$this->form_validation->set_rules('nome', 'Nome','trim|required');
		$this->form_validation->set_rules('email', 'E-mail','trim|required|valid_email');

		if ( !$this->input->post('id_user') ){
			$this->form_validation->set_rules('senha', 'Senha','trim|required|min_length[6]|max_length[8]');
		}

		if ($this->form_validation->run() === TRUE){

			/*echo '<pre>';
				var_dump($this->input->post());
			echo '</pre>';*/

			$username 	= $this->input->post('nome');
			$password 	= $this->input->post('senha');
			$email 		= $this->input->post('email');
			$additional_data = array(
				'first_name' 	=> $this->input->post('primeiro_nome'),
				'last_name' 	=> $this->input->post('ultimo_nome'),
				'company'		=> 'Ad-ooh'
			);
			$group = array('1');

			if ($this->input->post('id_user')){

				$id = $this->input->post('id_user');

				$data['username'] 	= $this->input->post('nome');
				$data['first_name']	= $this->input->post('primeiro_nome');
				$data['last_name']	= $this->input->post('ultimo_nome');
				$data['email'] 		= $this->input->post('email');
				$data['active'] 	= $this->input->post('ativo');

				if ($this->input->post('senha')){
					$data['password'] = $this->input->post('senha');
				}

				if ($this->ion_auth->update($id, $data)){

					setMsg('msgCadastro', 'Usuário atualizado com sucesso!', 'sucesso');
					redirect('admin/users_admin','refresh');

				} else {
					setMsg('msgCadastro', 'Erro ao atualizar usuário!', 'erro');
					redirect('admin/users_admin','refresh');
				}

			} else {

				if ($this->ion_auth->register($username, $password, $email, $additional_data,$group)){

					setMsg('msgCadastro', 'Usuário cadastrado com sucesso!', 'sucesso');
					redirect('admin/users_admin/users_module','refresh');

				}else{

					setMsg('msgCadastro', 'Erro ao cadastrar usuário!', 'erro');
					redirect('admin/users_admin','refresh');
				}
			}

		}else{
			$this->users_module();
		}
	}

	public function del ($id_user = NULL){

		if ($id_user){

			if ($id_user == 1){

				setMsg('msgCadastro', 'Você não possui permissões para apagar este usuário!', 'erro');
				redirect('admin/users_admin','refresh');

			}

			if ($id_user == $this->session->userdata('user_id')){

				setMsg('msgCadastro', 'Não se pode apagar logado nesta sessão!', 'erro');
				redirect('admin/users_admin','refresh');
			}

			if ($this->ion_auth->delete_user($id_user)){

				setMsg('msgCadastro', 'Usuário apagado com sucesso!', 'sucesso');
				redirect('admin/users_admin','refresh');

			} else {

				setMsg('msgCadastro', 'Erro ao apagar usuário', 'erro');
				redirect('admin/users_admin','refresh');

			}
		} else {

			setMsg('msgCadastro', 'Necessita selecionar um usuário para a exclusão!', 'erro');
			redirect('admin/users_admin','refresh');

		}
	}
}
