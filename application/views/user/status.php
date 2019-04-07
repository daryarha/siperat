<div class="container" style="width: 95%">
<h4 class="center">Status Surat</h4>
  <br>
      <div class="row col s12 container "><b>
            <div class="col s12 m6">Nama : <?php echo $nama;?></div>
            <div class="col s12 m6">NIM : <?php echo $nim;?></div></b>
      </div>
      <div class="row col s12" style="overflow-x: scroll;">
      <table class="bordered highlight">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Acara/Kegiatan</th>
          <th>Nama Penerima</th>
          <th>Perihal</th>
          <th>Lampiran</th>
          <th>Keterangan</th>
          <th>Status</th>
          <th>No Surat</th>
        </tr>
      </thead>
      <tbody>
    <?php $i=1; foreach ($data as $status) {?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><b><?php echo $status['nama_acara']?></b></td>
            <td><?php echo $status['nama_penerima']?></td>
            <td><?php echo $status['perihal']?></td>
            <td><?php echo $status['lampiran']?></td>
            <td><?php echo $status['keterangan']?></td>
            <td><?php
                  if ($status['status'] == 1) {
                    echo "<b style='color:blue'>Dalam Proses</b>";
                  } elseif ($status['status'] == 2) {
                    echo "<b style='color:green'>Diterima</b>";
                  } elseif ($status['status'] == 3) {
                    echo "<b style='color:red'>Ditolak</b>";
                  } else{
                    echo "<b style='color:red'>ERROR</b>";
                  }
                ?>
            </td>
            <td><?php
                  if ($status['status'] == 1) {
                    echo "<i>belum tersedia</i>";
                  } elseif ($status['status'] == 2) {
                    echo $status['no_surat_keluar'].'<a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Klik Untuk Mencetak" data-tooltip-id="3a4781ce-db5f-a0a6-aec0-1faafe85ffac" style="padding: 0 10px; color:green"><i class="material-icons">print</i></a>';
                  } elseif ($status['status'] == 3) {
                    echo "<i>tidak tersedia</i>";
                  } else{
                    echo "<b style='color:red'>ERROR</b>";
                  }
                ?>
            </td>
            <td></td>
          </tr>
    <?php } ?>
        </tbody>
      </table>
      </div>
      <blockquote>tombol print untuk sementara belum bisa</blockquote>
</div>
