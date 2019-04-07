<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{
	public function GetMahasiswa(){
		$data = $this->db->query("SELECT * FROM mahasiswa");
		return $data->result_array();
	}
}
?>