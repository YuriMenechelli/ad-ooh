<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{

	public function outback(){
		$data['title']= 'Ad-ooh';
		$data['view'] = 'web/reports/outback/outback_202010';
		$this->load->view('web/template/index',$data);
	}
	public function freeco(){
		$data['title']= 'Ad-ooh';
		$data['view'] = 'web/reports/freeco/freeco_202010';
		$this->load->view('web/template/index',$data);
	}
	public function mcdonalds(){
		$data['title']= 'Ad-ooh';
		$data['view'] = 'web/reports/mcdonalds/mcdonalds_202009';
		$this->load->view('web/template/index',$data);
	}
}
