<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeledit extends CI_Controller
{   
	public function GetWhere($table, $data){
    $res=$this->db->get_where($table, $data);
    return $res->result_array();
	}
}