<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_list extends CI_Model {

	function tampil()
	{
		$this->db->select('*')
 		->join('jenis_kamar','jenis_kamar.id_jenis = kamar.id_jenis');
 		$query = $this->db->get('kamar');
 		return $query->result();
	}

	function tampilfasilitas($id)
	{
		$this->db->select('*')
 		->join('jenis_kamar','jenis_kamar.id_jenis = kamar.id_jenis')
 		->where('id_kamar',$id);
 		$query = $this->db->get('kamar');
 		return $query->result();
	}

	function detail($id)
	{
		$this->db->select('*')
 		->join('jenis_kamar','jenis_kamar.id_jenis = kamar.id_jenis')
 		->where('id_kamar',$id);
 		$query = $this->db->get('kamar');
 		return $query->result();
	}

	function tambah()
	{
		$no_kamar 		= $this->input->post('no_kamar');
		$harga	= $this->input->post('harga');
		$id_jenis = $this->input->post('id_jenis');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_kamar']['name'])
        {
            if ($this->upload->do_upload('foto_kamar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'id_jenis' => $id_jenis,
					'no_kamar'		=> $no_kamar,
					'harga'		=> $harga,
					'foto_kamar' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('kamar', $data);
			
			}	 
		}
		else{
				$data = array(
					'no_kamar'		=> $no_kamar,
					'harga'		=> $harga,
					'foto_kamar' 				=> 'kosong1.png',
				);
				$this->db->insert('kamar', $data);
			}
	}

	function edit()
	{
		$id_kamar = $this->input->post('id_kamar');
		$no_kamar 		= $this->input->post('no_kamar');
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
		
		if($_FILES['foto_kamar']['name'])
        {
            if ($this->upload->do_upload('foto_kamar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'no_kamar'		=> $no_kamar,
					'harga'		=> $harga,
					'foto_kamar' 				=> $gbr['file_name'],
				);
				$this->db->where('id_kamar',$id_kamar)->update('kamar', $data);
			
			}	 
		}
		else{
				$data = array(
					'no_kamar'		=> $no_kamar,
					'harga'		=> $harga,
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