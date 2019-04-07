<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1" style="border-collapse: collapse;">
        <tr style="background: grey">
            <td>No. Induk</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td colspan="2"></td>
        </tr>
        <?php foreach ($data as $mahasiswa) {?>
        <tr>
            <td><?php echo $mahasiswa['no_induk']; ?></td>
            <td><?php echo $mahasiswa['nama']; ?></td>
            <td><?php echo $mahasiswa['alamat']; ?></td>
            <td><a href="<?php echo base_url()."index.php/helloworld/edit_data/".$mahasiswa['no_induk']; ?>">Edit</td>
            <td><a href="<?php echo base_url()."index.php/helloworld/delete_data/".$mahasiswa['no_induk']; ?>">Delete</td>
        </tr>
        <?php } ?>
    </table>
    <a href="<?php echo base_url()."index.php/helloworld/add_data";?>">Insert</a>
</body>
</html>