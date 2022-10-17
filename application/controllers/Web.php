<?php
defined('BASEPATH') or exit ('no direct script acces allowed');

class Web extends CI_Controller{
	
	function _construct(){
		parent::_construct();
		$this->load->helper('url');
	}
	
	public function index(){
		$data['Judul'] = "Halaman Depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
}