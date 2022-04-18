<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_fasilitas extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_fasilitas');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_fasilitas",
			'namafileview' 	=> "V_data_fasilitas",
			'tampil'		=> $this->m_data_fasilitas->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_fasilitas->tambah();
		redirect('data_fasilitas');
	}

	function edit()
	{
		$this->m_data_fasilitas->edit();
		redirect('data_fasilitas');
	}

	function hapus($id)
	{
		$this->m_data_fasilitas->hapus($id);
		redirect('data_fasilitas');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_fasilitas",
			'namafileview' 	=> "V_data_fasilitas",
			'tampil'		=> $this->m_data_fasilitas->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 