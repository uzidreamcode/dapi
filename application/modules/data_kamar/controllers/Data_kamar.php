<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kamar extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_kamar');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_kamar",
			'namafileview' 	=> "V_data_kamar",
			'tampil'		=> $this->m_data_kamar->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "data_kamar",
			'namafileview' 	=> "V_detail",
			'tampil'		=> $this->m_data_kamar->detail($id),
			'fasilitas'		=> $this->m_data_kamar->tampilfasilitas($id),
			'id'			=> $id,
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_kamar->tambah();
		redirect('data_kamar');
	}

	function edit()
	{
		$this->m_data_kamar->edit();
		redirect('data_kamar');
	}

	function hapus($id)
	{
		$this->m_data_kamar->hapus($id);
		redirect('data_kamar');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_kamar",
			'namafileview' 	=> "V_data_kamar",
			'tampil'		=> $this->m_data_kamar->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 