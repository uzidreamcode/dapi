<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akomodasi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_akomodasi');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "akomodasi",
            'namafileview' 	=> "V_akomodasi",
            'tampil'    => $this->m_akomodasi->tampilakomodasi(),
		);
		echo Modules::run('template_tamu/tampilCore', $data);
    }
}
?>