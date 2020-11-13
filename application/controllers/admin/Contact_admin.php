<?php
defined('BASEPATH')OR exit ('No direct script access allowed!');


class Contact_admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
//		$this->load->library('email');
		$this->load->model('admin/contact_model_admin');
	}

	public function index(){
		$data['title'] 		= 'Contatos Recentes';
		$data['view'] 		= 'admin/contacts/listar';
		$data['contact']	= $this->contact_model_admin->getContacts();
		$data['session']	= $this->home_admin_model->getUserBySession();

		$this->load->view('admin/template/index', $data);
	}

	/*public function send_mail(){
		$config['protocol'] 	= 'smtp';
		$config['smtp_host'] 	= 'ssl://smtp.gmail.com';
		$config['smtp_port'] 	= '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] 	= 'cadastro@ad-ooh.com';

		$config['smtp_pass'] 	= 'thefmedia2608';
		$config['charset'] 		= 'utf-8';
		$config['newline'] 		= "\r\n";
		$config['mailtype'] 	= 'html';
		$config['validation'] 	= TRUE;

		$this->email->initialize($config);
		$this->email->from('cadastro@ad-ooh.com',$this->input->post('nome'));
		$this->email->to('yurimenechelli@gmail.com');

		$this->email->subject($this->input->post('subject'));

		$nome 		= $this->input->post('nome');
		$phone 		= $this->input->post('phone');
		$email 		= $this->input->post('email');
		$msg 		= $this->input->post('msg');

		$body = "
  				<style type='text/css'>
  					body {
  						margin:0;
  						font-family: Arial,sans-serif;
  						font-size:14px;
  						color: #888888;
  					}
  					a{
  						color: #666666;
  						text-decoration: none;
  					}
  					a:hover {
  						color: #111111;
  						text-decoration: none;
  					}
  				</style>
  				  <html lang='pt-br'>
  				  	<body>
  				      <table width='550' border='0' cellpadding='2' cellspacing='0' bgcolor='#ffffff'>
  				      	<tr>
  				      	 <td>
  				      	    <tr>
  				      	     <td width='550'><strong>Nome:</strong> $nome</td>
  				      	    </tr>
  				      	    <tr>
  				      	      <td width='550'><strong>E-mail:</strong> <b>$email</b></td>
  				      	    </tr>
  				      	    <tr>
  				      	     <td width='550'><strong>Telefone:</strong> <b>$phone</b></td>
  				      	    </tr>
  				      	    <tr>
  				      	      <td width='550'><strong>Mensagem:</strong> $msg</td>
  				      	    </tr>
  				      	 </td>
  				      	</tr>
  				      </table>
  				     </body>
  				  </html>";
		$this->email->message($body);

		$data['name']	= $this->input->post('nome');
		$data['phone']	= $this->input->post('phone');
		$data['email']	= $this->input->post('email');
		$data['subject']= $this->input->post('subject');
		$data['msg']	= $this->input->post('msg');

		if ($this->email->send()){

			$data['dt_inc']	= dataNow();
			$this->contact_model->insertWebContact($data);
			echo "<script> alert('E-mail enviado com sucesso!')</script>";
			redirect('home','refresh');

		}else {
			echo $this->email->print_debugger();
		}
	}*/
}
