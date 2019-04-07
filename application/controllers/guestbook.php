<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends CI_Controller
{   
 function index(){
 	$this->load->view('bukutamu');
 }
 function add_guestbook(){
    $this->load->model('fungsi');
    $data = array(
        'nama' => $this->input->post('nama'),
        'asal' => $this->input->post('asal'),
        'tanggal_datang' => $this->input->post('tanggal_datang'),
        'hp' => $this->input->post('hp'),
        'keperluan' => $this->input->post('keperluan'),
        'tanggal_undangan' => $this->input->post('tanggal_undangan'),
         );
    $data = $this->fungsi->Insert('apps_siperat_buku_tamu', $data);
    redirect('/guestbook','refresh');
 }
}