<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_fasilitas extends CI_Model {

	function tampil()
	{
		return $this->db->get('fasilitas')->result();
	}

	function tambah()
	{
		$nama_fasilitas 		= $this->input->post('nama_fasilitas');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_fasilitas'		=> $nama_fasilitas,
					'foto' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('fasilitas', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_fasilitas'		=> $nama_fasilitas,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('fasilitas', $data);
			}
	}

	function edit()
	{
		$id_fasilitas = $this->input->post('id_fasilitas');
		$nama_fasilitas = $this->input->post('nama_fasilitas');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_fasilitas'		=> $nama_fasilitas,
					'foto' 				=> $gbr['file_name'],
				);
				$this->db->where('id_fasilitas',$id_fasilitas)->update('fasilitas', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_fasilitas'		=> $nama_fasilitas,
				);
				$this->db->where('id_fasilitas',$id_fasilitas)->update('fasilitas', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_fasilitas', $id)->delete('fasilitas');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_kamar',$cari)->get('kamar')->result();
	}
}