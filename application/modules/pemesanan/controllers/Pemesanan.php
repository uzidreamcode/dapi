<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pemesanan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index($id)
	{
		$data = array(
			'namamodule' 	=> "pemesanan",
            'namafileview' 	=> "V_pemesanan",
            'dataguruku'    => $this->m_pemesanan->tampilpemesanan(),
		);
		echo Modules::run('template_tamu/tampilCore', $data);
    }

    function cetak()
    {
    	$this->load->view('V_cetak');
    }
}
?>