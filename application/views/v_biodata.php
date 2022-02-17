<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Biodata</h1>
    <a href="<?= base_url('profile/tambah_data')?>"> ~ Tambah Data ~</a>
    <p>Nama Depan : <?= $nama ?></p>
    <p>Nama Belakang : <?= $nama ?></p>
    <p>Tempat Lahir : <?= $tempatlahir?> </p>
    <p>Tanggal Lahir :  <?= $tanggallahir ?></P>
    <p>Jenis Kelamin : <?= $jk?></p>
    <p>Alamat : <?= $alt ?></p>
</body>
</html>