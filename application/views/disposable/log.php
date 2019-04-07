<?php
session_start();
mysql_connect("localhost","root","") or die("Tidak bisa koneksi database");
mysql_select_db("db_bem");//sesuaikan dengan nama database anda

$nim = $_POST['nim'];
$psw = $_POST['psw'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM tabeluser WHERE nim='$nim' AND password='$psw'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['nim'] = $c['nim'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            header("location:admin/indexadmin.html");
        }else if($c['level']=="user"){
            header("location:user/suratmasuk.html");
        }
    }else{echo"<script>alert('Password Salah');window.location='index.html'</script>";
    }
}else if($op=="out"){
    unset($_SESSION['nim']);
    unset($_SESSION['level']);
    header("location:../index");
}
?>
