<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{   
	function __contsruct(){
		parent::__contsruct();
		$this->load->model('fungsi');


	}
	function index(){
        if($this->session->userdata('prev') == "1"){
            redirect(base_url("admin"));
        }else if($this->session->userdata('prev') == "2"){
            redirect(base_url("user"));
        }else{
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    function ceklog(){
    	$this->load->model('fungsi');
    	$nim = $this->input->post('nim');
    	$password = $this->input->post('psw');
    	$data = array(
    		'username'=>$nim,
    		'password'=>md5($password),
    		);
    	$cek = $this->fungsi->CekLog('apps_siperat_user',$data)->num_rows();
        $getpas = $this->fungsi->GetWhere('apps_siperat_user', array('username' => $nim));
        $getpas = $getpas[0]['password'];
    	if($cek>0 && $getpas==$password){
            $prev = $this->fungsi->GetWhere('apps_siperat_user', array('username' => $nim));
            $prev = $prev[0]['prev'];
    		$data_session=array(
    			'nim'=>$nim,
                'nama'=>"Admin",
    			'prev'=>$prev
    			);
    		$this->session->set_userdata($data_session);
    		if($prev == 1){
    			redirect(base_url('/admin'));
    		}else if($prev == 2){
    			redirect(base_url('user'));
    		}
    	}else{
            if($nim != '' AND $password != ''){
                $nama = "fikri";
                $suks = true;

                // $ch = curl_init();
                // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLOPT_URL, $link);
                // $result = curl_exec($ch);
                // curl_close($ch);
                // $obj = json_decode($result);
                // $suks = $obj->sukses;
                if ($suks == true) {
                    // $nama = $obj->nama;
                    // $fak = $obj->fak;
                    // $jurusan = $obj->jurusan;
                    // $prodi = $obj->prodi;
                    $prev = 2;
                    $data_session=array(
                        'nim'=>$nim,
                        'nama'=>$nama,
                        'prev'=>$prev
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url('user'));
                } else {
                    $this->session->sess_destroy();
                    ?>
                    <script language="JavaScript">
                        alert('Maaf, password Anda salah!');
                        document.location='<?php echo base_url('login')?>';
                    </script>
                    <?php
                }
            } else {
                redirect(base_url('login'));
            };           
    	}
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('/login'));
    }
}