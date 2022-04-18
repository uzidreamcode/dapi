<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_tamu extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_dashboard_tamu');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "dashboard_tamu",
            'namafileview' 	=> "V_dashboard_tamu",
            'dataguruku'    => $this->m_dashboard_tamu->tampiltamu(),
		);
		echo Modules::run('template_tamu/tampilCore', $data);
    }
}
?>