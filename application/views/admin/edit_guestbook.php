<!DOCTYPE html>
<html>
<head>
  <title>Edit buku tamu</title>

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
<div class="container">
<br>
<h4 class="center">Edit buku tamu</h4>
  <br>
  <div class="row">
    <form class="col push-l3 push-m3 push-s2 l6 m6 s8" method="post" action="<?php echo base_url()."/admin/update_buku_tamu"; ?>">
      <div class="row">
        <div class="input-field">  
          <input name="id_buku_tamu" type="text" value="<?php echo $id_buku_tamu; ?>" readonly>
          <label for="id" class="active">Id</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">  
          <input name="nama" type="text" class="validate" value="<?php echo $nama; ?>" required>
          <label for="nama" class="active">Nama</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="asal" type="text" class="validate" value="<?php echo $asal; ?>" required>
          <label for="asal" class="active">Asal</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="tanggal_datang" type="date" class="datepicker" value="<?php echo $tanggal_datang; ?>" required>
          <label for="tanggal_datang" class="active">Tanggal Datang</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="hp" type="text" class="validate" value="<?php echo $hp; ?>" required>
          <label for="hp" class="active">No. HP</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="keperluan" type="text" class="validate" value="<?php echo $keperluan; ?>" required>
          <label for="keperluan" class="active">Keperluan</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="tanggal_undangan" type="date" class="datepicker" value="<?php echo $tanggal_undangan; ?>">
          <label for="tanggal_undangan" class="active">Tanggal Undangan</label>
        </div>
      </div>

      <div class="row">  
        <div class="col push-l2 l2"><p>
  <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        </div>

        <div class="push-l4 col l2"><p>
  <button class="btn waves-effect waves-red red" type="reset" name="action">Reset
    <i class="material-icons right">delete</i>
      </div>

  </form>
  </div>
</div>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src=" http://materializecss.com/templates/starter-template/js/init.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js">

  </script>

  <script>
    
  $('.datepicker').pickadate({

    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd'
  });
  </script> 
  <script type="text/javascript">
  $( document ).ready(function(){

    $(".button-collapse").sideNav();
  });
  </script>
</body>
</html>