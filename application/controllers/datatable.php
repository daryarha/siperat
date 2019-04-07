<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends CI_Controller
{   
	function index(){
        $this->load->model('fungsi');
        $data = $this->fungsi->AmbilTable('apps_siperat_surat_keluar');
        $data = array('data' => $data);
		$this->load->view('/datatable/index',$data);
	}
}