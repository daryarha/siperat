<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller
{   
	public function index(){
        $this->load->model('modelbaru');
        $data = $this->modelbaru->GetMahasiswa('mahasiswa');
        $data = array('data' => $data);
        $this->load->view('data_mahasiswa', $data);
    }
    public function add_data(){
    $this->load->view('form_add');
	}
	public function insert(){
    $this->load->model('modelbaru');
    $data = array(
        'no_induk' => $this->input->post('no_induk'),
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat')
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
    $this->load->view('form_edit', $data); 
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
        redirect('helloworld/index','refresh');
    }

    }
}