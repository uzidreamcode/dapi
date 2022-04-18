<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_kasir extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template_kasir');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_kasir');
	}

	public function tampilkasir($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_kasir',$data);
	}

}
