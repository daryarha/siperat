<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
 <nav>
    <div class="nav-wrapper #757575 white">

          <img class="responsive-img brand-logo" src="<?php echo base_url('assets/img/bem.png');?>" style="height: 100%;">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php  echo base_url('/admin/');?>"><span class="blue-text text-darken-2"><i class="material-icons right">receipt</i>Guest book</span></a></li>
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
<div class="container">
<h4 class="center">Form Pengajuan Surat</h4>
<br>
  <div class="row">
    <form class="col push-l3 push-m3 push-s2 l6 m6 s8" method="post" action="<?php echo base_url()."admin/update_submission"; ?>">
      <input name="id_surat_keluar" type="hidden" value="<?php echo $id_surat_keluar; ?>" readonly>
      <input name="tipe" type="hidden" value="<?php echo $tipe; ?>" readonly>
      <div class="row">
        <div class="input-field">
          <input name="no_surat_keluar" type="text" class="validate" value="<?php echo $no_surat_keluar; ?>">
          <label for="no_surat_keluar" class="active" >No Surat Keluar</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field">
        <select name="id_pengirim">
          <option value="" disabled>Pilih Pengirim</option>
          <?php foreach ($data as $pengirim) {?>
          <option value="<?php echo $pengirim['id_pengirim']?>" <?php if($pengirim['id_pengirim']==$id_pengirim){echo"selected";}?>><?php echo $pengirim['nama']?></option>
          <?php } ?>
        </select>
        <label>Nama Pengirim</label>
      </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="nama_acara" type="text" class="validate" value="<?php echo $nama_acara; ?>">
          <label for="nama_acara" class="active">Nama Acara/Kegiatan</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="nama_pemohon" type="text" class="validate" value="<?php echo $nama_pemohon; ?>">
          <label for="nama_pemohon" class="active">Nama Pemohon</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="nim_pemohon" type="text" class="validate" value="<?php echo $nim_pemohon; ?>">
          <label for="nim_pemohon" class="active">NIM Pemohon</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="hp_pemohon" type="text" class="validate" value="<?php echo $hp_pemohon; ?>">
          <label for="hp_pemohon" class="active">No. HP Pemohon</label>
        </div>
      </div>


      <div class="row">
      <div class="input-field">
        <select name="id_jenis_surat">
          <option value="" disabled>Pilih Jenis Surat</option>
          <?php foreach ($data2 as $jenis_surat) {?>
          <option value="<?php echo $jenis_surat['id_jenis_surat']?>" <?php if($jenis_surat['id_jenis_surat']==$id_jenis_surat){echo"selected";}?>><?php echo $jenis_surat['jenis_surat']?></option>
          <?php } ?>
        </select>
        <label>Jenis Surat</label>
      </div>
      </div>

      <div class="row">
      <div class="input-field">
        <select name="id_penerima">
          <option value="" disabled>Pilih Kategori Penerima</option>
          <?php foreach ($data3 as $penerima) {?>
          <option value="<?php echo $penerima['id_penerima']?>" <?php if($penerima['id_penerima']==$id_penerima){echo"selected";}?>><?php echo $penerima['penerima']?></option>
          <?php } ?>
        </select>
        <label>Kategori Penerima</label>
      </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="nama_penerima" type="text" class="validate" value="<?php echo $nama_penerima; ?>">
          <label for="nama_penerima" class="active">Nama Penerima</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="perihal" type="text" class="validate" value="<?php echo $perihal; ?>">
          <label for="perihal" class="active">Perihal</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="lampiran" type="text" class="validate" value="<?php echo $lampiran; ?>">
          <label for="lampiran" class="active">Lampiran</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field ">
          <textarea name="keterangan" class="materialize-textarea"><?php echo $keterangan; ?></textarea>
          <label for="keterangan" class="active">Keterangan</label>
        </div>
      </div>


    <?php
    $stat_desc=array("Dalam proses","Diterima","Ditolak");
    $i=0;
    ?>
            <div class="row">
      <div class="input-field">
        <select name="status">
          <option value="" disabled>Pilih Status</option>
          <?php foreach ($stat_desc as $stat) {?>
          <option value="<?php echo ($i+1);?>" <?php if($i==$status-1){echo"selected";}?>><?php echo $stat;?></option>
          <?php $i++; }  ?>
        </select>
        <label>Status</label>
      </div>
      </div>

      <div class="row">  
        <div class="col push-l1 l2"><p>
  <button class="btn waves-effect waves-light light-blue left" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        </div>

        <div class="col push-l5 l2"><p>
  <button class="btn waves-effect waves-red red" type="reset" name="action">reset
    <i class="material-icons right">delete</i>
      </div>
      </div>


  </form>
  </div>
</div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src=" http://materializecss.com/templates/starter-template/js/init.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js">

  </script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>


</body>
</html>