<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_list extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_list');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_list",
			'namafileview' 	=> "V_data_list",
			'tampil'		=> $this->m_data_list->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "data_list",
			'namafileview' 	=> "V_detail",
			'tampil'		=> $this->m_data_list->detail($id),
			'fasilitas'		=> $this->m_data_list->tampilfasilitas($id),
			'id'			=> $id,
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_list->tambah();
		redirect('data_list');
	}

	function edit()
	{
		$this->m_data_list->edit();
		redirect('data_list');
	}

	function hapus($id)
	{
		$this->m_data_list->hapus($id);
		redirect('data_list');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_list",
			'namafileview' 	=> "V_data_list",
			'tampil'		=> $this->m_data_list->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 