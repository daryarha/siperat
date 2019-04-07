<nav>
    <div class="nav-wrapper #757575 white">
      <img class="responsive-img brand-logo" src="<?php echo base_url('assets/img/bem.png');?>" style="height: 100%;">
      <a href="#" data-activates="mobile-demo" class="button-collapse" style="color: #757575"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php  echo base_url('/user/');?>"><span class="blue-text text-darken-2"><i class="material-icons right">receipt</i>Form</span></a></li>
      <li><a href="<?php echo base_url('/user/status');?>"><span class="blue-text text-darken-2"><i class="material-icons right">track_changes</i>Status</span></a></li>
      <li><a href="<?php echo base_url('/login/logout');?>"><span class="blue-text text-darken-2"><i class="material-icons right">input</i>Logout</span></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><img class="responsive-img" src="<?php echo base_url('assets/img/bem.png');?>" style="width: 100%;"></li>
        <li><a href="<?php echo base_url('/user/');?>"><i class="material-icons">receipt</i>Form Pengajuan</a></li>
        <li><a href="<?php echo base_url('/user/status');?>"><i class="material-icons">track_changes</i>Status Surat</a></li>
        <li><a href="<?php echo base_url('/login/logout');?>"><i class="material-icons">input</i>Logout</a></li>
      </ul>
    </div>
</nav>