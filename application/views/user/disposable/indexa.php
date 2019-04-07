<!DOCTYPE html>
<html>
<head>
	<title>Form Surat</title>

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
      <li><a href="<?php  echo base_url('/user/bukutamu');?>" target="frameBody"><span class="blue-text text-darken-2"><i class="material-icons right">receipt</i>Form</span></a></li>
        <li><a href="<?php echo base_url('/user/status');?>" target="frameBody"><span class="blue-text text-darken-2"><i class="material-icons right">track_changes</i>Status</span></a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><span class="blue-text text-darken-2"><i class="material-icons right">input</i>Logout</span></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo base_url('/user/bukutamu');?>">Form Pengajuan</a></li>
        <li><a href="<?php echo base_url('/user/status');?>">Status Surat</a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><i class="material-icons">power_settings_new</i></a></li>
      </ul>
    </div>
  </nav>
<div class="container">
<iframe id="idIframe" name="frameBody" onload="resizeIframe(this)" style="width:100%; border: 0px;" scrolling="no" seamless="seamless"></iframe>
	

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src=" http://materializecss.com/templates/starter-template/js/init.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js">

  </script>
<script type="text/javascript">
  function resizeIframe(iframe) {
    iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
  }
</script>  
  <script>
    
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>	
  <script type="text/javascript">
  $( document ).ready(function(){

  	$(".button-collapse").sideNav();
  });
  </script>
</body>
</html>