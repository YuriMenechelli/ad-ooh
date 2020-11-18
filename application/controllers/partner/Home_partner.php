<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Home_partner extends CI_Controller{


	public function index()	{
		$data['title'] 	= 'Ad-ooh Partner';
		$data['view'] 	= 'web/dashboard_partner/principal/home';

		$this->load->view('web/dashboard_partner/template/index', $data);

	}
}
