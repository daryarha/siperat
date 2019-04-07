<!DOCTYPE html>
<html>
<head>
  <title>Daftar buku tamu</title>

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
  <h4><div class="center">Daftar Buku Tamu</div></h4>
  <br>
        <div class="row">
          <div class="input-field col l3 right">
            <input name="search" type="text" class="validate">
            <label for="search" class="active"><i class="material-icons right">search</i>Pencarian.............................</label>
          </div>
        </div>
      <table id="sort" class="bordered highlight">
        <thead>
          <tr>
              <th onclick="urut(0)">No.</th>
              <th onclick="urut(1)">Nama</th>
              <th onclick="urut(2)">Asal</th>
              <th onclick="urut(3)">Tanggal datang</th>
              <th onclick="urut(4)">No. HP</th>
              <th onclick="urut(5)">Keperluan</th>
              <th onclick="urut(6)">Tanggal undangan</th>
              <th>Fungsi</th>
          </tr>
        </thead>


        <tbody>
        <?php if($data!=null){?>
        <?php foreach ($data as $bukutamu) {?>
        <tr>
            <td><?php echo $bukutamu['id_buku_tamu']; ?></td>
            <td><?php echo $bukutamu['nama']; ?></td>
            <td><?php echo $bukutamu['asal']; ?></td>
            <td><?php echo $bukutamu['tanggal_datang']; ?></td>
            <td><?php echo $bukutamu['hp']; ?></td>
            <td><?php echo $bukutamu['keperluan']; ?></td>
            <td><?php echo $bukutamu['tanggal_undangan']; ?></td>
            <td>
          <a href="<?php echo base_url()."admin/edit_buku_tamu/".$bukutamu['id_buku_tamu']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href="<?php echo base_url()."admin/delete_buku_tamu/".$bukutamu['id_buku_tamu']; ?>"><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
        </tr>
        <?php } }else{?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Tidak ada data</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
         <?php }?>
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