<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_kamar extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_jenis_kamar');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "jenis_kamar",
			'namafileview' 	=> "V_jenis_kamar",
			'tampil'		=> $this->m_jenis_kamar->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_jenis_kamar->tambah();
		redirect('jenis_kamar');
	}

	function edit()
	{
		$this->m_jenis_kamar->edit();
		redirect('jenis_kamar');
	}

	function hapus($id)
	{
		$this->m_jenis_kamar->hapus($id);
		redirect('jenis_kamar');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "jenis_kamar",
			'namafileview' 	=> "V_jenis_kamar",
			'tampil'		=> $this->m_jenis_kamar->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 