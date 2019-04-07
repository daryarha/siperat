<!DOCTYPE html>
<html>
<head>
  <title>Surat masuk</title>

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
      <li><a href="<?php  echo base_url('/admin/bukutamu');?>"><span class="blue-text text-darken-2"><i class="material-icons right" style="transform: rotate(180deg);">receipt</i>Guest book</span></a></li>
        <li><a href="<?php  echo base_url('/admin/lihatsuratklr');?>"><span class="blue-text text-darken-2"><i class="material-icons right">trending_flat</i>Mail out</span></a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><span class="blue-text text-darken-2"><i class="material-icons right">input</i>Logout</span></a></li>
      </ul>
      <ul class="side-nav navbar-collapse" id="mobile-demo">
        <li><a href="<?php  echo base_url('/admin/lihatsuratmsk');?>">Mail in</a></li>
        <li><a href="<?php  echo base_url('/admin/lihatsuratklr');?>">Mail out</a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><i class="material-icons">power_settings_new</i>Logout</a></li>
      </ul>
    </div>
  </nav>  
<div class="container">

  <br>
  <h4><div class="center">List surat masuk</div></h4>
  <br>
        <br>
        <div class="actions">
        Surat Masuk
          <a href=""><span class="grey-text text-darken-2 right"><i class="material-icons">search</i></span></a>
        </div>
      <table id="suratMsk">
        <thead>
          <tr>
              <th onclick="urut(0)"> Nama</th>
              <th onclick="urut(1)">Asal</th>
              <th onclick="urut(2)">Tanggal</th>
              <th onclick="urut(3)">No. HP</th>
              <th onclick="urut(4)">Keperluan</th>
              <th onclick="urut(5)">Status</th>
              <th onclick="urut(6)">Fungsi</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td>1231231</td>
            <td>Masang</td>
            <td>Diterima</td>
            <td>
          <a href=""><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href=""><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>2328382</td>
            <td>izin</td>
            <td>ditolak</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>945445</td>
            <td>sk</td>
            <td>sedang diproses</td>
          </tr>
        </tbody>
      </table>
	</div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js">
  </script>

<script type="text/javascript">
	
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
        
</script>
<script src="<?php echo base_url('assets/js/urut.js');?>"></script>

</body>
</html>