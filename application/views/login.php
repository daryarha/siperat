<div class="container">
  <div class="row">
    <div class="col s7 m4 l4 push-l4 push-m4 push-s2">
      <img class="responsive-img center" src="<?php echo base_url('assets/img/bem.png');?>" style="width: 100%">
    </div>
  </div>
	<div class="row">
    <form class="col l4 m4 s7 push-l4 push-m4 push-s2" action="<?php echo base_url()."login/ceklog";?>" method="post"  name="login">
      <div class="row">
        <div class="input-field">
          <input id="nim" type="text" class="validate" name="nim" required>
          <label for="nim" class="active">NIM</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field">
          <input id="psw" type="password" class="validate" name="psw" required>
          <label for="psw" class="active">Password SIAM</label>
        </div>
      </div>
  		<div class="row">  
    		<div class="col push-l3 push-m3 push-s3"><p>
    		<input type="submit" class="btn waves-effect waves-light" value="login" name="submit" onclick="test()">
    		</div>
  		</div>
  	</form>
  </div>
</div>