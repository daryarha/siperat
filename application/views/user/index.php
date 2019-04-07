<div class="row container">
<h4 class="center">Form Pengajuan Surat</h4>
<br>
<div class="col s12 m6">GAMBAR CONTOH</div>
<div class="col s12 m6">
  <div class="row">
    <form class="" method="post" action="<?php echo base_url()."user/create_submission"; ?>">
      <div class="row">
        <div class="input-field">
          <input name="nama_pemohon" type="text" class="validate" disabled value="<?php echo $nama?>">
          <label for="nama_pemohon" class="active">Nama Pemohon</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="nim_pemohon" type="text" class="validate" disabled value="<?php echo $nim?>">
          <label for="nim_pemohon" class="active">NIM Pemohon</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="hp_pemohon" type="text" class="validate">
          <label for="hp_pemohon" class="active">HP Pemohon</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field">
        <select name="tipe" required="">
          <option value="" disabled selected>Pilih Tipe Surat</option>
          <option value="1">Kepanitiaan</option>
          <option value="2">Internal BEM</option>
        </select>
        <label>Tipe Surat</label>
      </div>
      </div>
      <div class="row">
      <div class="input-field">
        <select name="id_pengirim" required>
          <option value="" disabled selected>Pilih Pengirim</option>
          <?php foreach ($data as $pengirim) {?>
          <option value="<?php echo $pengirim['id_pengirim']?>"><?php echo $pengirim['nama']?></option>
          <?php } ?>
        </select>
        <label>Pengirim</label>
      </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="nama_acara" type="text" class="validate" required="">
          <label for="nama_acara" class="active">Nama Acara/Kegiatan</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field">
        <select name="id_jenis_surat" required="">
          <option value="" disabled selected>Pilih Jenis Surat</option>
          <?php foreach ($data2 as $jenis_surat) {?>
          <option value="<?php echo $jenis_surat['id_jenis_surat']?>"><?php echo $jenis_surat['jenis_surat']?></option>
          <?php } ?>
        </select>
        <label>Jenis Surat</label>
      </div>
      </div>
      <div class="row">
      <div class="input-field">
        <select name="id_penerima" required="">
          <option value="" disabled selected>Pilih Kategori Penerima</option>
          <?php foreach ($data3 as $penerima) {?>
          <option value="<?php echo $penerima['id_penerima']?>"><?php echo $penerima['penerima']?></option>
          <?php } ?>
        </select>
        <label>Kategori Penerima</label>
      </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="nama_penerima" type="text" class="validate" required="">
          <label for="nama_penerima" class="active">Nama Penerima / Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="perihal" type="text" class="validate" required="">
          <label for="perihal" class="active">Perihal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="lampiran" type="text" class="validate">
          <label for="lampiran" class="active">Lampiran</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field ">
          <textarea name="keterangan" class="materialize-textarea"></textarea>
          <label for="keterangan" class="active">Keterangan</label>
        </div>
      </div>
      <div class="row">  
        <div class="col push-l1 l2"><p>
          <button class="btn waves-effect waves-light light-blue left" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
        <div class="col push-l5 l2"><p>
          <button class="btn waves-effect waves-red red" type="reset" name="action">Hapus
          <i class="material-icons right">delete</i>
      </div>
      </div>
	</form>
	</div>
</div>
</div>