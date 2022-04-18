<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_kamar extends CI_Model {

	function tampil()
	{
		$this->db->select('*')
		->from('jenis_kamar');
		$query = $this->db->get();
		return $query->result();
	}

	function tambah()
	{
		$nomer_kamar 		= $this->input->post('nomer_kamar');
		$harga	= $this->input->post('harga');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nomer_kamar'		=> $nomer_kamar,
					'harga'		=> $harga,
					'logo' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('kamar', $data);
			
			}	 
		}
		else{
				$data = array(
					'nomer_kamar'		=> $nomer_kamar,
					'harga'		=> $harga,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('kamar', $data);
			}
	}

	function edit()
	{
		$id_kamar = $this->input->post('id_kamar');
		$nama 		= $this->input->post('nama_kamar');
		$keterangan	= $this->input->post('keterangan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_kamar'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_kamar',$id_kamar)->update('kamar', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_kamar'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_kamar',$id_kamar)->update('kamar', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_kamar', $id)->delete('kamar');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_kamar',$cari)->get('kamar')->result();
	}
}