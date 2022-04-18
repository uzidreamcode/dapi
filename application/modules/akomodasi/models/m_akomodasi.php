<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akomodasi extends CI_Model {

	function tampilakomodasi()
	{
		$this->db->select('*')
		->join('kamar', 'kamar.id_jenis = jenis_kamar.id_jenis');

		$query = $this->db->get('jenis_kamar');
		return $query->result();
	}

}
?>