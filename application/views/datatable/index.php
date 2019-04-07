<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/config.css');?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/config.js');?>"></script>
</head>
<body>
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Material Datatable</span>
        <div class="actions">
          <a href="#add_users" class="modal-trigger waves-effect btn-flat nopadding"><i class="material-icons">person_add</i></a>
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>

              <th onclick="urut(0)">Id Surat Keluar</th>
              <th onclick="urut(1)">Jenis Surat</th>
              <th onclick="urut(2)">Kategori Penerima</th>
              <th onclick="urut(3)">Kategori Pengirim</th>
              <th onclick="urut(4)">No Surat Keluar</th>
              <th onclick="urut(5)">Nama Acara/Kegiatan</th>
              <th onclick="urut(6)">Nama Pemohon</th>
              <th onclick="urut(7)">NIM Pemohon</th>
              <th onclick="urut(8)">No. HP Pemohon</th>
              <th onclick="urut(9)">Nama Penerima</th>
              <th onclick="urut(10)">Perihal</th>
              <th onclick="urut(11)">Lampiran</th>
              <th onclick="urut(12)">Keterangan</th>
              <th onclick="urut(13)">Status</th>
              <th>Fungsi</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $submission) {?>
        <tr>
            <td><?php echo $submission['id_surat_keluar']; ?></td>
    <?php $jenis_surat = $this->fungsi->GetWhere('apps_siperat_jenis_surat', array('id_jenis_surat' => $submission['id_jenis_surat']));?>
            <td><?php echo $jenis_surat[0]['jenis_surat']; ?></td>
    <?php $penerima = $this->fungsi->GetWhere('apps_siperat_penerima', array('id_penerima' => $submission['id_penerima']));?>
            <td><?php echo $penerima[0]['kode']; ?></td>
    <?php $pengirim = $this->fungsi->GetWhere('apps_siperat_pengirim', array('id_pengirim' => $submission['id_pengirim']));?>
            <td><?php echo $pengirim[0]['kode']; ?></td>
            <td><?php echo $submission['no_surat_keluar']; ?></td>
            <td><?php echo $submission['nama_acara']; ?></td>
            <td><?php echo $submission['nama_pemohon']; ?></td>
            <td><?php echo $submission['nim_pemohon']; ?></td>
            <td><?php echo $submission['hp_pemohon']; ?></td>
            <td><?php echo $submission['nama_penerima']; ?></td>
            <td><?php echo $submission['perihal']; ?></td>
            <td><?php echo $submission['lampiran']; ?></td>
            <td><?php echo $submission['keterangan']; ?></td>
            <?php if($submission['status']==1){
              $status = "Dalam proses";
            }else if($submission['status']==2){
              $status = "Diterima";
            }else{
              $status = "Ditolak";
            }?>
            <td><?php echo $status ?></td>
            <td>
          <a href="<?php echo base_url()."admin/edit_submission/".$submission['id_surat_keluar']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href="<?php echo base_url()."admin/delete_submission/".$submission['id_surat_keluar']; ?>"><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
        </tr>
        <?php } ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
</body>
</html>