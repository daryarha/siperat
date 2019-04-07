<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{   
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('prev') != "1"){
        	if($this->session->userdata('prev') == "2"){
			redirect(base_url("/user"));
        	}else{
			redirect(base_url("/login"));
			}
		}
	}
	//pemanggilan view
	function index(){
        $this->load->model('fungsi');
        $data = $this->fungsi->AmbilTable('apps_siperat_buku_tamu');
        $data = array('data' => $data);
		$this->load->view('/admin/index',$data);
	}

	function submission(){
        $this->load->model('fungsi');
        $data = $this->fungsi->AmbilTable('apps_siperat_surat_keluar');
        $data = array('data' => $data);
		$this->load->view('/admin/submission',$data);
	}

	function form_sub(){
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
        $this->load->view('/admin/form_submission',$core);

	}


	// fungsi EDIT, UPDATE, DELETE BUKU TAMU!!!!
	function delete_buku_tamu($id_bukutamu){
        $id_bukutamu = array('id_buku_tamu' => $id_bukutamu);
        $this->load->model('fungsi');
        $this->fungsi->Delete('apps_siperat_buku_tamu', $id_bukutamu);
        redirect(base_url('/admin/'),'refresh');
	}

    function edit_buku_tamu($id_bukutamu){
    $this->load->model('fungsi');
    $bukutamu = $this->fungsi->GetWhere('apps_siperat_buku_tamu', array('id_buku_tamu' => $id_bukutamu));
    $data = array(
        'id_buku_tamu' => $bukutamu[0]['id_buku_tamu'],
        'nama' => $bukutamu[0]['nama'],
        'asal' => $bukutamu[0]['asal'],
        'tanggal_datang' => $bukutamu[0]['tanggal_datang'],
        'hp' => $bukutamu[0]['hp'],
        'keperluan' => $bukutamu[0]['keperluan'],
        'tanggal_undangan' => $bukutamu[0]['tanggal_undangan'],

        );
    $this->load->view('/admin/edit_guestbook', $data); 
    }

    function update_buku_tamu(){
    $id_buku_tamu = $_POST['id_buku_tamu'];
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $tanggal_datang = $_POST['tanggal_datang'];
    $hp = $_POST['hp'];
    $keperluan = $_POST['keperluan'];
    $tanggal_undangan = $_POST['tanggal_undangan'];
    $data = array(
        'nama' => $nama,
        'asal' => $asal,
        'tanggal_datang' => $tanggal_datang,
        'hp' => $hp,
        'keperluan' => $keperluan,
        'tanggal_undangan' => $tanggal_undangan
     );
    $where = array('id_buku_tamu' => $id_buku_tamu);
    $this->load->model('fungsi');
    $res = $this->fungsi->Update('apps_siperat_buku_tamu', $data, $where);
        if ($res>0) {
            redirect('/admin/','refresh');
        }
    }

    //fungsi CREATE UPDATE DELETE PENGAJUAN SURAT
    function create_submission(){
    $this->load->model('fungsi');
    $data = array(
        'no_surat_keluar' => $this->input->post('no_surat_keluar'),
        'id_pengirim' => $this->input->post('id_pengirim'),
        'nama_acara' => $this->input->post('nama_acara'),
        'nama_pemohon' => $this->input->post('nama_pemohon'),
        'nim_pemohon' => $this->input->post('nim_pemohon'),
        'hp_pemohon' => $this->input->post('hp_pemohon'),
        'id_jenis_surat' => $this->input->post('id_jenis_surat'),
        'id_penerima' => $this->input->post('id_penerima'),
        'nama_penerima' => $this->input->post('nama_penerima'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'keterangan' => $this->input->post('keterangan'),
         );
    $data = $this->fungsi->Insert('apps_siperat_surat_keluar', $data);
    redirect('/admin/submission','refresh');
    }

    function delete_submission($id_submission){
        $id_submission = array('id_surat_keluar' => $id_submission);
        $this->load->model('fungsi');
        $this->fungsi->Delete('apps_siperat_surat_keluar', $id_submission);
        redirect(base_url('/admin/submission'),'refresh');
    }

    function edit_submission($id_submission){
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
    $submission = $this->fungsi->GetWhere('apps_siperat_surat_keluar', array('id_surat_keluar' => $id_submission));
    $data = array(
        'id_surat_keluar' => $submission[0]['id_surat_keluar'],
        'id_jenis_surat' => $submission[0]['id_jenis_surat'],
        'id_penerima' => $submission[0]['id_penerima'],
        'id_pengirim' => $submission[0]['id_pengirim'],
        'no_surat_keluar' => $submission[0]['no_surat_keluar'],
        'nama_acara' => $submission[0]['nama_acara'],
        'nama_pemohon' => $submission[0]['nama_pemohon'],
        'nim_pemohon' => $submission[0]['nim_pemohon'],
        'hp_pemohon' => $submission[0]['hp_pemohon'],
        'nama_penerima' => $submission[0]['nama_penerima'],
        'perihal' => $submission[0]['perihal'],
        'lampiran' => $submission[0]['lampiran'],
        'keterangan' => $submission[0]['keterangan'],
        'status' => $submission[0]['status'],
        'tipe'=>$submission[0]['tipe'],
        );
    $core = array_merge_recursive($core,$data);
    $this->load->view('/admin/edit_submission', $core); 
    }


    function update_submission(){
    $id_surat_keluar = $_POST['id_surat_keluar'];
    $id_jenis_surat = $_POST['id_jenis_surat'];
    $id_penerima = $_POST['id_penerima'];
    $id_pengirim = $_POST['id_pengirim'];
    $no_surat_keluar = $_POST['no_surat_keluar'];
    $nama_acara = $_POST['nama_acara'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $nim_pemohon = $_POST['nim_pemohon'];
    $hp_pemohon = $_POST['hp_pemohon'];
    $nama_penerima = $_POST['nama_penerima'];
    $perihal = $_POST['perihal'];
    $lampiran = $_POST['lampiran'];
    $keterangan = $_POST['keterangan'];
    $status = $_POST['status'];
    $tipe = $_POST['tipe'];
    $data = array(
        'id_jenis_surat' => $id_jenis_surat,
        'id_penerima' => $id_penerima,
        'id_pengirim' => $id_pengirim,
        'no_surat_keluar' => $no_surat_keluar,
        'nama_acara' => $nama_acara,
        'nama_pemohon' => $nama_pemohon,
        'nim_pemohon' => $nim_pemohon,
        'hp_pemohon' => $hp_pemohon,
        'nama_penerima' => $nama_penerima,
        'perihal' => $perihal,
        'lampiran' => $lampiran,
        'keterangan' => $keterangan,
        'status' => $status,
        'tipe'=>$tipe,
     );
    
    $where = array('id_surat_keluar' => $id_surat_keluar);
    $this->load->model('fungsi');
    $id_ars = $this->fungsi->GetWhere('apps_siperat_arsip', array('id_arsip' => $tipe));
    $last = 0;
    foreach ($id_ars as $t) {$last = $t['last'];};
    if ($status==2) {
        $tpp = $last+1;
        $w = array('tipe' => $tipe);
        $dt = array('last' =>$tpp );
        $res = $this->fungsi->Update('apps_siperat_arsip', $dt, $w);
    }
    $res = $this->fungsi->Update('apps_siperat_surat_keluar', $data, $where);
        if ($res>0) {
            redirect('/admin/submission','refresh');
        }
    }

    function search(){
        
    }
}