<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){
		$data['title']	= 'Ad-ooh Home';
		$data['view'] 	= 'web/principal/home';
		$this->load->view('web/template/index',$data);
	}
}
