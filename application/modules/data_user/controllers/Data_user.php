<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_user');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_user",
            'namafileview' 	=> "V_data_user",
            'tampil'    	=> $this->m_data_user->tampiluser(),
		);
		echo Modules::run('template/tampilCore', $data);
    }

    function fpdf(){
        $mpdf = new\Mpdf\Mpdf();

        $hasil = array(
            'namamodule'            => "data_user",
            'tampil'                => $this->m_data_user->tampiluser(),
        );

        $datat = $this->load->view('V_export',$hasil,TRUE);
        $nama = "laporan Data User";
        $mpdf->WriteHTML($datat);
        $mpdf->output($nama.'.pdf','I');

    }

    function tambah()
    {
    	$this->m_data_user->tambah();
        $this->session->set_flashdata('tambah', 'Berhasil Menambahkan Data Baru');

    	redirect('data_user');
    }

    function edit()
    {
    	$this->m_data_user->edit($id);
        $this->session->set_flashdata('edit', 'Berhasil Merubah Data');

    	redirect('data_user');
    }

    function hapus($id)
    {
    	$this->m_data_user->hapus($id);
        $this->session->set_flashdata('hapus', 'Berhasil Menghapus Data');

    	redirect('data_user');
    }


}
?>