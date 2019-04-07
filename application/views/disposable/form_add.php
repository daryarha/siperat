<!DOCTYPE html>
<html>
<head>
    <title>Form Add</title>
</head>
<body>
    <table>
        <form method="post" action="<?php echo base_url()."index.php/helloworld/insert"; ?>">
            <tr>
                <td>Nomor Induk</td>
                <td>:</td>
                <td><input required type="text" name="ni" placeholder="Masukkan Nomor Induk.."></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Anda.."></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea style="resize: none;" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</body>
</html>