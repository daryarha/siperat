<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuansurat extends CI_Controller
{   
    public function tambah_table(){
    $this->load->view('form_add');
	}
	public function insert(){
    $this->load->model('modelbaru');
    $data = array(
        'kat_pengirim' => $this->input->post('kat_pengirim'),
        'nm_acara' => $this->input->post('nm_acara'),
        'nm_pemohon' => $this->input->post('nm_pemohon'),
        'nim_pemohon' => $this->input->post('nim_pemohon'),
        'hp_pemohon' => $this->input->post('hp_pemohon'),
        'kat_penerima' => $this->input->post('kat_penerima'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'ket' => $this->input->post('ket'),
         );
    $data = $this->modelbaru->Insert('mahasiswa', $data);
    redirect(base_url(),'refresh');
	}
	public function delete_data($noinduk){
    $noinduk = array('no_induk' => $noinduk);
    $this->load->model('modelbaru');
    $this->modelbaru->Delete('mahasiswa', $noinduk);
    redirect(base_url(),'refresh');
	}
    public function edit_data($noinduk){
    $this->load->model('modelbaru');
    $siswa = $this->modelbaru->GetWhere('mahasiswa', array('no_induk' => $noinduk));
    $data = array(
        'no_induk' => $siswa[0]['no_induk'],
        'nama' => $siswa[0]['nama'],
        'alamat' => $siswa[0]['alamat'],
        );
    $this->load->views->admin('form_edit', $data); 
    }

    public function update_data(){
    $no_induk = $_POST['no_induk'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $data = array(
        'nama' => $nama,
        'alamat' => $alamat
     );
    $where = array('no_induk' => $no_induk);
    $this->load->model('modelbaru');
    $res = $this->modelbaru->Update('mahasiswa', $data, $where);
    if ($res>0) {
        redirect('login/index','refresh');
    }

    }
}