<!DOCTYPE html>
<html>
<head>
  <title>Buku tamu</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body> 
<div class="container">
<br>
<h4 class="center">Isi buku tamu</h4>
  <br>
  <div class="row">
    <form class="col push-l3 push-m3 push-s2 l6 m6 s8" method="post" action="<?php echo base_url()."/guestbook/add_guestbook"; ?>">
      <div class="row">
        <div class="input-field">  
          <input name="nama" type="text" class="validate" required>
          <label for="nama" class="active">Nama</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="asal" type="text" class="validate" required>
          <label for="asal" class="active">Asal</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input name="tanggal_datang" type="date" class="datepicker" required>
          <label for="tanggal_datang" class="active">Tanggal Datang</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="hp" type="text" class="validate" required>
          <label for="hp" class="active">No. HP</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="keperluan" type="text" class="validate" required>
          <label for="keperluan" class="active">Keperluan</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field">
          <input name="tanggal_undangan" type="date" class="datepicker">
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