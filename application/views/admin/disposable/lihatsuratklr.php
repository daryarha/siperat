<!DOCTYPE html>
<html>
<head>
  <title>Surat keluar</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  	th{
  		cursor: pointer;
  	}
  </style>
</head>
<body> 
 <nav>
    <div class="nav-wrapper #757575 white">

    			<img class="responsive-img brand-logo" src="<?php echo base_url('assets/img/bem.png');?>" style="height: 100%;">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php  echo base_url('/admin/index');?>"><span class="blue-text text-darken-2"><i class="material-icons right" style="transform: rotate(180deg);">receipt</i>Guest book</span></a></li>
        <li><a href="<?php  echo base_url('/admin/lihatsuratklr');?>"><span class="blue-text text-darken-2"><i class="material-icons right">trending_flat</i>Mail Submission</span></a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><span class="blue-text text-darken-2"><i class="material-icons right">input</i>Logout</span></a></li>
      </ul>
      <ul class="side-nav navbar-collapse" id="mobile-demo">
        <li><a href="<?php  echo base_url('/admin/bukutamu');?>">Guest book</a></li>
        <li><a href="<?php  echo base_url('/admin/lihatsuratklr');?>">Mail request</a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><i class="material-icons">power_settings_new</i>Logout</a></li>
      </ul>
    </div>
  </nav>  
<div class="container">
  <br>
  <h4><div class="center">List surat keluar</div></h4>
  <br>
        <div class="actions">
          <a href="suratkeluar"><span class="blue-text text-darken-2 left"><i class="material-icons">playlist_add</i></span></a>
          <a href=""><span class="grey-text text-darken-2 right"><i class="material-icons small" data-position="bottom" data-delay="50" data-tooltip="Cari">search</i></span></a>
        </div>
      <table id="suratKlr" class="bordered highlight">
        <thead>
          <tr>
              <th onclick="urut(0)">Kategori Pengirim</th>
              <th onclick="urut(1)">Nama Acara/Kegiatan</th>
              <th onclick="urut(2)">Nama Pemohon</th>
              <th onclick="urut(3)">NIM Pemohon</th>
              <th onclick="urut(4)">No. HP Pemohon</th>
              <th onclick="urut(5)">Kategori Penerima</th>
              <th onclick="urut(6)">Perihal</th>
              <th onclick="urut(7)">Lampiran</th>
              <th onclick="urut(8)">Keterangan</th>
              <th>Fungsi</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>BEM FILKOM</td>
            <td>PK2MABA</td>
            <td>Eclair</td>
            <td>165150200112307</td>
            <td>081231231</td>
            <td>Dekanat</td>
            <td>Perizinan</td>
            <td>Lampiran berikut</td>
            <td>Keterangan berikut</td>
            <td>
          <a href=""><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href=""><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Pj2MABA</td>
            <td>Ellair</td>
            <td>125150200112307</td>
            <td>031231231</td>
            <td>Dwkanat</td>
            <td>Parizinan</td>
            <td>Lbmpiran berikut</td>
            <td>Kgterangan berikut</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Ph2MABA</td>
            <td>Eglair</td>
            <td>135150200112307</td>
            <td>011231231</td>
            <td>Djkanat</td>
            <td>Phrizinan</td>
            <td>Lfmpiran berikut</td>
            <td>Kfgterangan berikut</td>
          </tr>
        </tbody>
      </table>
            
</div>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script type="text/javascript">
  	
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  </script>
<script src="<?php echo base_url('assets/js/urut.js');?>"></script>
</body>
</html>