<!DOCTYPE html>
<html>
<head>
    <title>Form Edit</title>
</head>
<body>
    <table>
        <form method="post" action="<?php echo base_url()."index.php/helloworld/update_data"; ?>">
            <tr>
                <td>Nomor Induk</td>
                <td>:</td>
                <td><input type="text" readonly name="no_induk" placeholder="Masukkan Nomor Induk.." value="<?php echo $no_induk; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" required  name="nama" placeholder="Masukkan Nama Anda.." value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea style="resize: none;" required  name="alamat"><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </form>
    </table>
</body>

    </html>