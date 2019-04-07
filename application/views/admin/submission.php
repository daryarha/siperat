<!DOCTYPE html>
<html>
<head>
  <title>Daftar pengajuan surat</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  	th{
  		cursor: pointer;
  	}
    td:last-child{
      width:70px;
    }
  </style>
</head>
<body> 
 <nav>
    <div class="nav-wrapper #757575 white">

    			<img class="responsive-img brand-logo" src="<?php echo base_url('assets/img/bem.png');?>" style="height: 100%;">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php  echo base_url('/admin/');?>"><span class="blue-text text-darken-2"><i class="material-icons right" style="transform: rotate(180deg);">receipt</i>Guest book</span></a></li>
        <li><a href="<?php  echo base_url('/admin/submission');?>"><span class="blue-text text-darken-2"><i class="material-icons right">subtitles</i>Mail submission</span></a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><span class="blue-text text-darken-2"><i class="material-icons right">input</i>Logout</span></a></li>
      </ul>
      <ul class="side-nav navbar-collapse" id="mobile-demo">
        <li><a href="<?php  echo base_url('/admin/index');?>">Guest book</a></li>
        <li><a href="<?php  echo base_url('/admin/submission');?>">Mail submission</a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><i class="material-icons">power_settings_new</i>Logout</a></li>
      </ul>
    </div>
  </nav>  
<!-- <div class="container"> -->
  <br>
  <h4><div class="center">Daftar pengajuan surat</div></h4>
  <br>
        <div class="row">
            <a href="<?php echo base_url()."admin/form_sub"; ?>"><span class="blue-text text-darken-2 right"><i class="material-icons medium">email</i></span></a>
          <form id="search">
            <div class="input-field col l3 right">
              <input name="search" type="text" class="validate" id="search_fld">
              <label for="search" class="active">Cari...</label>
            </div>
          </form>
        </div>
      <table id="sort" class="bordered highlight mdl-data-table data">
        <thead>
          <tr>
              <th onclick="urut(0)">Id Surat Keluar</th>
              <th onclick="urut(1)">Jenis Surat</th>
              <th onclick="urut(2)">Kategori Penerima</th>
              <th onclick="urut(3)">Kategori Pengirim</th>
              <th onclick="urut(4)">No Surat Keluar</th>
              <th onclick="urut(5)">Nama Acara/Kegiatan</th>
              <th onclick="urut(6)">Nama Pemohon</th>
              <th onclick="urut(7)">NIM Pemohon</th>
              <th onclick="urut(8)">No. HP Pemohon</th>
              <th onclick="urut(9)">Nama Penerima</th>
              <th onclick="urut(10)">Perihal</th>
              <th onclick="urut(11)">Lampiran</th>
              <th onclick="urut(12)">Keterangan</th>
              <th onclick="urut(13)">Status</th>
              <th>Fungsi</th>
          </tr>
        </thead>

        <tbody>

        <?php if($data!=null){?>
        <?php foreach ($data as $submission) {?>
        <tr div="search_results">
            <td><?php echo $submission['id_surat_keluar']; ?></td>
    <?php $jenis_surat = $this->fungsi->GetWhere('apps_siperat_jenis_surat', array('id_jenis_surat' => $submission['id_jenis_surat']));?>
            <td><?php echo $jenis_surat[0]['jenis_surat']; ?></td>
    <?php $penerima = $this->fungsi->GetWhere('apps_siperat_penerima', array('id_penerima' => $submission['id_penerima']));?>
            <td><?php echo $penerima[0]['kode']; ?></td>
    <?php $pengirim = $this->fungsi->GetWhere('apps_siperat_pengirim', array('id_pengirim' => $submission['id_pengirim']));?>
            <td><?php echo $pengirim[0]['kode']; ?></td>
            <td><?php echo $submission['no_surat_keluar']; ?></td>
            <td><?php echo $submission['nama_acara']; ?></td>
            <td><?php echo $submission['nama_pemohon']; ?></td>
            <td><?php echo $submission['nim_pemohon']; ?></td>
            <td><?php echo $submission['hp_pemohon']; ?></td>
            <td><?php echo $submission['nama_penerima']; ?></td>
            <td><?php echo $submission['perihal']; ?></td>
            <td><?php echo $submission['lampiran']; ?></td>
            <td><?php echo $submission['keterangan']; ?></td>
            <?php if($submission['status']==1){
              $status = "Dalam proses";
            }else if($submission['status']==2){
              $status = "Diterima";
            }else{
              $status = "Ditolak";
            }?>
            <td><?php echo $status ?></td>
            <td>
          <a href="<?php echo base_url()."admin/edit_submission/".$submission['id_surat_keluar']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href="<?php echo base_url()."admin/delete_submission/".$submission['id_surat_keluar']; ?>"><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
        </tr>
        <?php } }else{?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="width: 150px;">Tidak ada data</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
         <?php }?>
        </tbody>
      </table>
            
<!-- </div> -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
    $('.data').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
  });
  </script>
    <script type="text/javascript">
      $(function() {
        $("#search").bind('submit',function() {
          var value = $('#search_fld').val();
           $.post(base_url ('/admin/search'),{value:value}, function(data){
             $("#search_results").html(data);
           });
           return false;
        });
        
      });
  </script>


<script src="<?php echo base_url('assets/js/urut.js');?>"></script>
</body>
</html>