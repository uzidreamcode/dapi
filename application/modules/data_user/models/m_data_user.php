<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_user extends CI_Model {

	function tampiluser()
	{
		$this->db->select('*')
				 ->from('user');
		$query = $this->db->get();
		return $query->result();
    }

    function tambah()
    {
    	$id_user					= $this->input->post('id_user');
 		$nama_user					= $this->input->post('nama_user');
        $email                      = $this->input->post('email');
 		$username					= $this->input->post('username');
 		$password					= $this->input->post('password');
 		$password1 					= sha1($password);
 		$role 						= $this->input->post('role');

 		 	$data = array(
 				'id_user'				=> $id_user,
  				'nama_user'				=> $nama_user,
                'email'                 => $email,
 				'username'				=> $username,
 				'password'				=> $password1,
 				'role'					=> $role
 			);
 			$this->db->insert('user', $data);
 		
    }

    function edit()
    {
    	$id_user					= $this->input->post('id_user');
 		$nama_user					= $this->input->post('nama_user');
        $email                      = $this->input->post('email');
 		$username					= $this->input->post('username');
 		$password					= $this->input->post('password');
 		$password1 					= sha1($password);
 		$role 						= $this->input->post('role');

 		 	$data = array(
 				'id_user'				=> $id_user,
  				'nama_user'				=> $nama_user,
                'email'                 => $email,
 				'username'				=> $username,
 				'password'				=> $password1,
 				'role'					=> $role
 			);
 			$this->db->where('id_user', $id_user)->update('user', $data);
 		
    }

    function hapus($id)
    {
    	$this->db->where('id_user', $id)->delete('user');
    }
    
}
?>