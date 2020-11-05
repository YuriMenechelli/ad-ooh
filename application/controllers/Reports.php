<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{

	public function index(){
		$data['title']= 'Ad-ooh';
		$data['view'] = 'web/reports/outback/list';
		$this->load->view('web/template/index',$data);
	}

}
