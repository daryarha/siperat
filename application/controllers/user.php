<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{   
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('prev') != "2"){
        	if($this->session->userdata('prev') == "1"){
			 redirect(base_url("/admin"));
        	}else{
			 redirect(base_url("/login"));
			}
		}
	}

	function index(){
        $core=array();
        $this->load->model('fungsi');
        $data = $this->fungsi->AmbilTable('apps_siperat_pengirim');
        $data = array('data' => $data);
        $core = array_merge_recursive($core, $data);
        $this->load->model('fungsi');
        $data2 = $this->fungsi->AmbilTable('apps_siperat_jenis_surat');
        $data2 = array('data2' => $data2);
        $core = array_merge_recursive($core, $data2);
        $this->load->model('fungsi');
        $data3 = $this->fungsi->AmbilTable('apps_siperat_penerima');
        $data3 = array('data3' => $data3);
        $core = array_merge_recursive($core, $data3);
        $nim = $this->session->userdata('nim');
        $nama = $this->session->userdata('nama');
        $data4 = array(
            'nim'=>$nim,
            'nama'=>$nama
        );
        $core = array_merge_recursive($core, $data4);
        $this->load->view('header');
        $this->load->view('/user/nav',$core);
		$this->load->view('/user/index',$core);
        $this->load->view('footer');
	}
	function status(){
		$core=array();
		$data = array(
			'nim'=>$this->session->userdata('nim'),
            'nama'=>$this->session->userdata('nama')
        );
		$core = array_merge_recursive($core,$data);
        $this->load->model('fungsi');
        $data = $this->fungsi->GetWhere('apps_siperat_surat_keluar', array('nim_pemohon' => $data['nim']));
        $data = array('data' => $data);
        $core = array_merge_recursive($core,$data);
        $this->load->view('header');
        $this->load->view('/user/nav',$core);
		$this->load->view('/user/status',$core);
        $this->load->view('footer');
	}

    function create_submission(){
    $this->load->model('fungsi');
    $tahun = date("Y");
    $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
    $bulan = $array_bulan[date('n')];
    $pengirim = $this->fungsi->GetWhere('apps_siperat_pengirim', array('id_pengirim' => $this->input->post('id_pengirim')));
    $penerima = $this->fungsi->GetWhere('apps_siperat_penerima', array('id_penerima' => $this->input->post('id_penerima')));
    $jenis = $this->fungsi->GetWhere('apps_siperat_jenis_surat', array('id_jenis_surat' => $this->input->post('id_jenis_surat')));
    $peng = 0;
    foreach ($pengirim as $p) {$peng = $p['kode'];};
    $pen = 0;
    foreach ($penerima as $pn) {$pen = $pn['kode'];};
    $jns = 0;
    foreach ($jenis as $j) {$jns = $j['kode'];};
    $tipe = $this->fungsi->GetWhere('apps_siperat_arsip', array('tipe' => $this->input->post('tipe')));
    $tp = 0;
    foreach ($tipe as $t) {$tp = $t['last'];};
    $acara = $this->input->post('nama_acara');
    $tp = $tp+1;
    if (strlen($tp)<3) {
        $tp = "00".$tp;
    }
    if ($this->input->post('tipe')==1) {
        $nosurat = "$tp/$jns/$pen/$acara/$peng/BEM FILKOM-UB/$bulan/$tahun"; //ini di edit nanti
    } else {
        $nosurat = "$tp/$jns/$pen/$peng/BEM FILKOM-UB/$bulan/$tahun"; //ini di edit nanti
    }
    $data = array(
        'no_surat_keluar' => $nosurat,
        'id_pengirim' => $this->input->post('id_pengirim'),
        'nama_acara' => $this->input->post('nama_acara'),
        'nama_pemohon' => $this->session->userdata('nama'),
        'nim_pemohon' => $this->session->userdata('nim'),
        'hp_pemohon' => $this->input->post('hp_pemohon'),
        'id_jenis_surat' => $this->input->post('id_jenis_surat'),
        'id_penerima' => $this->input->post('id_penerima'),
        'nama_penerima' => $this->input->post('nama_penerima'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'keterangan' => $this->input->post('keterangan'),
        'tipe'=>$this->input->post('tipe')
    );
    $data = $this->fungsi->Insert('apps_siperat_surat_keluar', $data);
    redirect('/user/status','refresh');
    }



}